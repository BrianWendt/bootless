<?php if (has_post_thumbnail()) { ?>
    <?php if (Bootless::option('featured_index') && !is_single()) { ?>
        <div class="featured-image">
            <?php the_post_thumbnail('index-featured', 'class=img-responsive'); ?>
        </div>
    <?php } ?>
    <?php if (Bootless::option('featured_single') && is_single()) { ?>
        <div class="featured-image">
            <?php the_post_thumbnail('single-featured', 'class=img-responsive'); ?>
        </div>
    <?php } ?>
<?php } ?>