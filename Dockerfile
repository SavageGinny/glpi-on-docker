FROM glpi/glpi:10.0.20

USER root

# Даем права на ВСЕ скрипты в образе
RUN find /opt/glpi -name "*.sh" -exec chmod +x {} \; && \
    find /var/www/html -name "*.sh" -exec chmod +x {} \; && \
    chmod +x /usr/local/bin/* || true

# Создаем все папки заранее
RUN mkdir -p /var/log && \
    touch /var/log/cron-output.log && \
    mkdir -p /var/glpi/files/_lock && \
    mkdir -p /var/glpi/files/_pictures && \
    mkdir -p /var/glpi/files/_plugins && \
    mkdir -p /var/glpi/files/_rss && \
    mkdir -p /var/glpi/files/_sessions && \
    mkdir -p /var/glpi/files/_tmp && \
    mkdir -p /var/glpi/files/_uploads && \
    mkdir -p /var/glpi/files/_inventories && \
    mkdir -p /var/glpi/marketplace && \
    mkdir -p /var/glpi/logs && \
    chown -R www-data:www-data /var/glpi /var/log /var/www/html && \
    chmod -R 755 /var/glpi /var/log /var/www/html

# Устанавливаем curl
RUN apt-get update && apt-get install -y curl && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Копируем плагины
COPY plugins/ /var/www/glpi/plugins/
RUN chown -R www-data:www-data /var/www/glpi/plugins && \
    find /var/www/glpi/plugins -type d -exec chmod 755 {} \; && \
    find /var/www/glpi/plugins -type f -exec chmod 644 {} \;

# НЕ переключаемся на www-data - оставляем root
# USER www-data

HEALTHCHECK --interval=30s --timeout=10s --start-period=120s --retries=3 \
    CMD curl -f http://localhost/ || exit 1