<?php
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
define('BOOTLESS', __DIR__ . DS);
define('BOOTLESS_ADMIN', BOOTLESS . 'admin/');
define('BOOTLESS_LIB', BOOTLESS . 'lib/');
define('BOOTLESS_VENDOR', BOOTLESS . 'vendor/');
define('BOOTSTRAP_LESS', BOOTLESS_VENDOR . 'twbs/bootstrap/less/');

include BOOTLESS_VENDOR . 'autoload.php';
