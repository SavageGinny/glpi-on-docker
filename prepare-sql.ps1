# prepare-sql.ps1
Write-Host "Preparing SQL scripts..." -ForegroundColor Cyan

$MySqlInitDir = ".\mysql\init"

# Создаем папку для SQL скриптов
if (-not (Test-Path $MySqlInitDir)) {
    New-Item -ItemType Directory -Path $MySqlInitDir -Force | Out-Null
    Write-Host "reated MySQL init directory" -ForegroundColor Green
}

# Проверяем наличие файла zoneinfo.sql
if (Test-Path ".\zoneinfo.sql") {
    Write-Host "Copying zoneinfo.sql..." -ForegroundColor Yellow
    Copy-Item -Path ".\zoneinfo.sql" -Destination "$MySqlInitDir\01_zoneinfo.sql" -Force
    Write-Host "Zoneinfo copied as 01_zoneinfo.sql" -ForegroundColor Green
}
else {
    Write-Host "zoneinfo.sql not found. It will be skipped." -ForegroundColor Yellow
}

Write-Host "`nSQL scripts prepared in: $MySqlInitDir" -ForegroundColor Green

# Проверяем, есть ли файлы
$files = Get-ChildItem -Path $MySqlInitDir -ErrorAction SilentlyContinue
if ($files) {
    foreach ($file in $files) {
        Write-Host "   - $($file.Name)" -ForegroundColor White
    }
}
else {
    Write-Host "   (no SQL scripts found)" -ForegroundColor DarkGray
}
