<?php
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include.php';

function less_var($name){
    return $name;
}
?>

<div class="bs">
    <?php include __DIR__ . DS . 'variables.form.php'; ?>
</div>

<link href="<?php echo get_template_directory_uri() ?>/admin/bootstrap.css" rel="stylesheet" />