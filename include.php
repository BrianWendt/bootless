<?php
if(!defined('DS')){
    define('DS', DIRECTORY_SEPARATOR);
}
define('BOOTLESS', __DIR__ . DS);
define('BOOTLESS_VENDOR', BOOTLESS . 'vendor' . DS);
define('BOOTLESS_LIB', BOOTLESS . 'lib' . DS);
define('BOOTSTRAP_LESS', BOOTLESS_LIB . 'bootstrap' . DS . 'less' . DS);

include BOOTLESS_VENDOR . 'autoload.php';
