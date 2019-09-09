<?php
// HTTP
define('HTTP_SERVER', 'https://codeandhardware.com/store/');

// HTTPS
define('HTTPS_SERVER', 'https://codeandhardware.com/store/');

// DIR
define('DIR_APPLICATION', '/var/www/html/store/catalog/');
define('DIR_SYSTEM', '/var/www/html/store/system/');
define('DIR_IMAGE', '/var/www/html/store/image/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'admincah');
define('DB_PASSWORD', 'R3tr090*1!');
define('DB_DATABASE', 'cahstore');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');