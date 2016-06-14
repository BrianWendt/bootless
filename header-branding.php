<section id="branding">
    <?php if (Bootless::option('branding_image')) { ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
            <img src="<?php echo Bootless::option('branding_image') ?>" class="img-responsive" />
        </a>
    <?php } else { ?>
        <h1 id="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home"><?php echo esc_html(get_bloginfo('name')); ?></a>
        </h1>
        <div id="site-description"><?php bloginfo('description'); ?></div>
    <?php } ?>
</section>