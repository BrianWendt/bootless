<?php
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include.php';

function less_var($name){
    return $name;
}
?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<div class="bs-docs-section" id="less-variables-section">
    <?php include __DIR__ . DS . 'variables.form.php'; ?>
</div>