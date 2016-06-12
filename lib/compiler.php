<?php

include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include.php';

$file = BOOTSTRAP_LESS . 'bootstrap.less';

$parser = new Less_Parser();
$parser->SetImportDirs([BOOTSTRAP_LESS]);
$parser->parseFile($file);
$css = $parser->getCss();
file_put_contents(BOOTLESS . 'css' . DS . 'bootstrap.css', $css);