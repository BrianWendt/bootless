<?php
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
define('BOOTLESS', __DIR__ . DS);
define('BOOTLESS_VENDOR', BOOTLESS . 'vendor/');
define('BOOTLESS_LIB', BOOTLESS . 'lib/');
define('BOOTSTRAP_LESS', BOOTLESS_VENDOR . 'twbs/bootstrap/less/');

include BOOTLESS_VENDOR . 'autoload.php';
