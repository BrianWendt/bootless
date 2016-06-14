<section id="branding">
    <?php if (has_header_image()) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_html(get_bloginfo('name')); ?>" class="img-responsive" />
        </a>
    <?php } else { ?>
        <h1 id="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
        </h1>
        <div id="site-description"><?php bloginfo('description'); ?></div>
    <?php } ?>
</section>