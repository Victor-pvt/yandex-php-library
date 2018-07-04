<?php
/**
 * Load and return settings array
 *
 * @author   Anton Shevchuk
 * @created  04.10.13 12:00
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
$root = realpath(dirname(__FILE__));
$autload = $root . '/../vendor/autoload.php';
$autload = realpath($autload);
///home/victor/projects/rul/yandex-php-library/vendor/autoload.php
$ini = realpath($root .'/settings.ini');


require_once $autload ;
return parse_ini_file($ini, true);
