<?php
class DB extends DBmysql {
   public $dbhost = 'mariadb';
   public $dbuser = 'glpi_user';
   public $dbpassword = 'glpi_password_123';
   public $dbdefault = 'glpi_db';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
