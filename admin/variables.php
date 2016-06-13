<?php
include_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'include.php';

function less_var($name) {
    return $name;
}
?>
<div class="bs">
    <h1>Customize Bootstrap</h1>
    <p>Customize the Bootstrap theme.</p>
    <form method="post">
        <?php include __DIR__ . DS . 'variables.form.php'; ?>
        <div class="clearfix"></div>
        <h2>custom.less</h2>
        <div class="form-group">
            <textarea name="custom" class="form-control" style="height: 200px;"><?php echo $custom ?></textarea>
        </div>
        <hr/>
        <p><b>Important!</b> Changes can be saved without compiling the theme but the changes will not be applied.</p>
        <div class="btn-group">
            <button class="btn btn-default" name="save" value="save">Save Variables</button>
            <button class="btn btn-success" name="save" value="compile">Save and Compile</button>
        </div>
    </form>
</div>

<link href="<?php echo get_template_directory_uri() ?>/admin/bootstrap.css" rel="stylesheet" />