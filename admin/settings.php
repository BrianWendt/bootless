<div class="bs">
    <div class="container-fluid">
        <div>
            <h1>Bootless Theme Settings</h1>
            <p>Customize your Bootless Theme</p>
        </div>
        <form class="form-horizontal" method="post">
            <h2>Navigation Bar Settings</h2>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Navigation Bar Location:
                </label>
                <div class="col-md-4 col-sm-9">
                    <select name="option[nav_position]" class="form-control">
                        <?php
                        foreach (Bootless::$nav_positions as $position => $label) {
                            echo '<option value="' . $position . '" ' . bootless_selected(Bootless::option('nav_position') == $position) . '>' . $label . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Navigation Bar Mode:
                </label>
                <div class="col-md-4 col-sm-9">
                    <select name="option[nav_mode]" class="form-control">
                        <?php
                        foreach (Bootless::$nav_modes as $mode => $label) {
                            echo '<option value="' . $mode . '" ' . bootless_selected(Bootless::option('nav_mode') == $mode) . '>' . $label . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Navigation Bar Branding:
                </label>
                <div class="col-md-4 col-sm-9">
                    <input type="text" name="option[nav_brand]" value="<?php echo Bootless::option('nav_brand') ?>" class="form-control" />
                </div>
                <p class="help-block col-md-6 col-sm-12">Leave blank to disable Branding in the Navigation Bar. This field accepts HTML.</p>
            </div>
            <div class="clearfix"></div>
            
            <h2>Layout Settings</h2>
            <p class="help-block">
                See <a href="http://getbootstrap.com/css/#grid" target="_blank">Bootstrap 3: Grid system</a> documentation.
                Tutorials are available at <a href="http://bootless.ontodevelopment.com/layout-customization-overview/" target="_blank">Custom Laces</a>.
            </p>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Content Column Class:
                </label>
                <div class="col-md-4 col-sm-9">
                    <input type="text" name="option[content_class]" value="<?php echo Bootless::option('content_class') ?>" class="form-control" />
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Sidebar Column Class:
                </label>
                <div class="col-md-4 col-sm-9">
                    <input type="text" name="option[sidebar_class]" value="<?php echo Bootless::option('sidebar_class') ?>" class="form-control" />
                </div>
            </div>
            <div class="clearfix"></div>
            
            <h2>Posts</h2>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Featured Image Position:
                </label>
                <div class="col-md-4 col-sm-9">
                    <select name="option[featured_position]" class="form-control">
                        <?php
                        foreach (Bootless::$featured_positions as $featured_position => $label) {
                            echo '<option value="' . $featured_position . '" ' . bootless_selected(Bootless::option('featured_position') == $mode) . '>' . $label . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Featured Image in Lists:
                </label>
                <div class="col-md-4 col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="option[featured_index]" value="1" <?php echo bootless_checked(Bootless::option('featured_index') == 1) ?> /> Enabled
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="option[featured_index]" value="0" <?php echo bootless_checked(Bootless::option('featured_index') != 1) ?> /> Disabled
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 col-sm-3">
                    Featured Image in Single Post:
                </label>
                <div class="col-md-4 col-sm-9">
                    <label class="radio-inline">
                        <input type="radio" name="option[featured_single]" value="1" <?php echo bootless_checked(Bootless::option('featured_single') == 1) ?> /> Enabled
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="option[featured_single]" value="0" <?php echo bootless_checked(Bootless::option('featured_single') != 1) ?> /> Disabled
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save Theme Settings</button>
        </form>
    </div>
</div>