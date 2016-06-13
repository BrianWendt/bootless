<div class="bs">
    <div class="container-fluid">
        <div>
            <h1>Bootless Theme Settings</h1>
            <p>Customize your Bootless Theme</p>
        </div>
        <form class="form-horizontal" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3">
                        Navigation Bar Location:
                    </label>
                    <div class="col-md-4 col-sm-9">
                        <select name="option[nav_position]" class="form-control">
                            <?php
                            foreach (Bootless::$nav_positions as $position => $label) {
                                echo '<option value="' . $position . '" ' . boolSelected(Bootless::option('nav') == $position) . '>' . $label . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-3">
                        Content Column Class:
                    </label>
                    <div class="col-md-4 col-sm-9">
                        <input type="text" name="option[content_class]" value="<?php echo Bootless::option('content_class') ?>" class="form-control" />
                    </div>
                </div>
                <div class="clearfix"></div>
                <label class="control-label col-md-2 col-sm-3">
                    Sidebar:
                </label>
                <div class="col-md-4 col-sm-9">
                    <label class="radio">
                        <input type="radio" name="option[sidebar]" value="1" <?php echo boolChecked(Bootless::option('sidebar') == 1) ?> /> Enabled
                    </label>
                    <label class="radio">
                        <input type="radio" name="option[sidebar]" value="0" <?php echo boolChecked(Bootless::option('sidebar') != 1) ?> /> Disabled
                    </label>
                </div>
                <p class="help-block col-md-6 col-sm-12">This will toggle whether the sidebar (Primary Widget area) is displayed.</p>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Sidebar Column Class:
                </label>
                <div class="col-md-4 col-sm-9">
                    <input type="text" name="option[sidebar_class]" value="<?php echo Bootless::option('sidebar_class') ?>" class="form-control" />
                </div>
            </div>
            <div class="clearfix"></div>

            <button type="submit" class="btn btn-success">Save Theme Settings</button>
        </form>
    </div>
</div>

<link href="<?php echo get_template_directory_uri() ?>/css/admin_bootstrap.css" rel="stylesheet" />