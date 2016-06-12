<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="s"><?php _x('Search for:', 'label'); ?></label>
    <div class="form-group">

        <div class="input-group">
            <input type="search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" />
            <div class="input-group-btn">
                <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" class="btn btn-default" />
            </div>
        </div>
    </div>
</form>