Write-Host "Starting GLPI Production Deployment..." -ForegroundColor Green

# Проверяем Docker
try {
    $null = docker --version
    Write-Host "Docker is running" -ForegroundColor Green
} catch {
    Write-Host "Docker is not running or not installed" -ForegroundColor Red
    Write-Host "Please start Docker Desktop and try again" -ForegroundColor Yellow
    exit 1
}

# Подготавливаем SQL скрипты
Write-Host "Preparing SQL scripts..." -ForegroundColor Cyan
.\prepare-sql.ps1

# Проверяем наличие плагинов
Write-Host "Checking plugins..." -ForegroundColor Cyan
if (-not (Test-Path "plugins")) {
    Write-Host "No plugins directory found" -ForegroundColor Red
    Write-Host "Please create 'plugins' folder with extracted plugins" -ForegroundColor Yellow
    exit 1
}

$pluginFolders = Get-ChildItem "plugins" -Directory
if ($pluginFolders.Count -eq 0) {
    Write-Host "No plugin folders found in plugins\" -ForegroundColor Red
    Write-Host "Please extract plugins to plugins\ folder" -ForegroundColor Yellow
    exit 1
}

Write-Host "Found $($pluginFolders.Count) plugins:" -ForegroundColor Green
foreach ($folder in $pluginFolders) {
    Write-Host "   - $($folder.Name)" -ForegroundColor White
}

# Сборка образа
Write-Host "Building Docker image..." -ForegroundColor Cyan
docker-compose build

if ($LASTEXITCODE -ne 0) {
    Write-Host "Docker build failed" -ForegroundColor Red
    exit 1
}

# Запуск сервисов
Write-Host "Starting services..." -ForegroundColor Cyan
docker-compose up -d

if ($LASTEXITCODE -ne 0) {
    Write-Host "Docker compose up failed" -ForegroundColor Red
    exit 1
}

Write-Host "Waiting for database initialization..." -ForegroundColor Yellow

# Ждем когда база данных будет готова принимать подключения
for ($i = 1; $i -le 10; $i++) {
    try {
        $result = docker exec glpi-db mysql -u root -proot_password_123 -e "SELECT 1;" 2>$null
        if ($LASTEXITCODE -eq 0) {
            Write-Host "Database is ready" -ForegroundColor Green
            break
        }
    } catch {
        # Ignore errors during wait
    }
    Write-Host "Waiting for database... ($i/10)" -ForegroundColor Yellow
    Start-Sleep -Seconds 2
}

# Создаем базу данных и пользователя
Write-Host "Creating database and user..." -ForegroundColor Cyan
docker exec glpi-db mysql -u root -proot_password_123 -e "CREATE DATABASE IF NOT EXISTS glpi_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
docker exec glpi-db mysql -u root -proot_password_123 -e "CREATE USER IF NOT EXISTS 'glpi_user'@'%' IDENTIFIED BY 'glpi_password_123';"
docker exec glpi-db mysql -u root -proot_password_123 -e "GRANT ALL PRIVILEGES ON glpi_db.* TO 'glpi_user'@'%';"
docker exec glpi-db mysql -u root -proot_password_123 -e "FLUSH PRIVILEGES;"
docker exec glpi-db mysql -u root -proot_password_123 -e "SHOW DATABASES;"

# Выполняем SQL скрипты
Write-Host "Executing SQL scripts..." -ForegroundColor Cyan

# Копируем SQL скрипты в контейнер
if (Test-Path "sql-scripts") {
    Write-Host "Copying SQL scripts to container..." -ForegroundColor Yellow
    docker cp sql-scripts/. glpi-db:/tmp/sql-scripts/

    # Выполняем каждый SQL файл
    $sqlFiles = Get-ChildItem "sql-scripts" -Filter "*.sql"
    foreach ($sqlFile in $sqlFiles) {
        Write-Host "Executing $($sqlFile.Name)..." -ForegroundColor White
        docker exec glpi-db mysql -u root -proot_password_123 glpi_db -e "source /tmp/sql-scripts/$($sqlFile.Name)"

        if ($LASTEXITCODE -eq 0) {
            Write-Host "  $($sqlFile.Name) executed successfully" -ForegroundColor Green
        } else {
            Write-Host "  Failed to execute $($sqlFile.Name)" -ForegroundColor Red
        }
    }
} else {
    Write-Host "No sql-scripts directory found" -ForegroundColor Yellow
}

Write-Host "Finalizing setup..." -ForegroundColor Yellow
Start-Sleep -Seconds 10

# Проверка статуса
Write-Host "Service status:" -ForegroundColor Cyan
docker-compose ps

# Проверка базы данных
Write-Host "Checking database..." -ForegroundColor Cyan
docker exec glpi-db mysql -u root -proot_password_123 -e "SHOW DATABASES;"
docker exec glpi-db mysql -u root -proot_password_123 glpi_db -e "SHOW TABLES;"

# Проверка установленных плагинов
Write-Host "Checking plugins in container..." -ForegroundColor Cyan
docker exec glpi-production ls -la /var/www/html/plugins/

Write-Host ""
Write-Host "================================================" -ForegroundColor Cyan
Write-Host "Deployment complete!" -ForegroundColor Green
Write-Host "GLPI: http://localhost:8081" -ForegroundColor White
Write-Host "Database with zoneinfo: mariadb:3306" -ForegroundColor White
Write-Host "Zoneinfo SQL: Executed during initialization" -ForegroundColor White
Write-Host ""
Write-Host "First time setup:" -ForegroundColor Yellow
Write-Host "1. Open http://localhost:8081" -ForegroundColor White
Write-Host "2. Follow installation wizard" -ForegroundColor White
Write-Host "3. Database settings:" -ForegroundColor White
Write-Host "   - Host: mariadb" -ForegroundColor Gray
Write-Host "   - User: glpi_user" -ForegroundColor Gray
Write-Host "   - Password: glpi_password_123" -ForegroundColor Gray
Write-Host "   - Database: glpi_db" -ForegroundColor Gray
Write-Host "================================================" -ForegroundColor Cyan