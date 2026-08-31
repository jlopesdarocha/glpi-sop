<?php
class DB extends DBmysql {
   public $dbhost = 'db';
   public $dbuser = 'sop_user';
   public $dbpassword = 'sop_password';
   public $dbdefault = 'SOP';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
