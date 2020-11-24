<?php

/**
 * DEFAULT
 */
define('APP_DEFAULT_TIMEZONE', 'America/Sao_Paulo');

define('APP_FORMAT_DATE', 'd/m/Y');
define('APP_FORMAT_DATETIME', 'd/m/Y H:i:s');

define('APP_FORMAT_DATE_DB', 'Y-m-d');
define('APP_FORMAT_DATETIME_DB', 'Y-m-d H:i:s');


/**
 * PROJECT
 */
define('DS', DIRECTORY_SEPARATOR);
define('PRODUCTION', 1);
define('DEVELOPMENT', 2);

define('APP_ENV', DEVELOPMENT);
define('APP_PATH', realpath('.'));

define('APP_SITE_NAME', 'OpenPet');
define('APP_SITE_DESCRIPTION', 'Sistema Open Source para ONGs de animais (Doação, adoção, institucional)');
define('APP_ACTIVE_THEME', 'teste');

define('APP_URL', (APP_ENV === PRODUCTION ? 'https://teste.com.br' : 'http://localhost:8080'));
define('APP_URL_ASSETS', APP_URL . '/assets');
define('APP_URL_STORAGE', APP_URL . '/storage');
define('APP_URL_THEME', APP_URL . '/themes/' . APP_ACTIVE_THEME);


/**
 * LIBRARIES/THIRD_PARTY
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "database",
    "port" => "3306",
    "dbname" => "open_pet",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);
