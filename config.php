<?php
// Paths for getting to files
define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/kinstusys');
define('LIBS', 'libs/');

// DB constants that will not change
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'kinstusys');
define('DB_USER', 'root');
define('DB_PASS', 'usbw');

// The sitewide Hashkey, do not change this because its used for passwords!
define('HASH_GENERAL_KEY', 'paswf1');
define('HASH_PASSWORD_KEY', 'paswfl');

// Variable to enable debugging
define("DE_BUG","true");

// the name of this application
define("APP_NAME","KinStuSys - Kindergarden Student System");