<?php

include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include.php';

$parser = new Less_Parser();
$parser->SetImportDirs([BOOTSTRAP_LESS]);
$parser->parseFile(BOOTSTRAP_LESS . 'bootstrap.less');
$parser->parseFile(BOOTLESS . 'css/wordpress.less');
$parser->parseFile(BOOTLESS . 'css/custom.less');
$css = $parser->getCss();
file_put_contents(BOOTLESS . 'css/bootstrap.css', $css);