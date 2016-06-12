<nav id="main-menu" role="navigation" class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo get_bloginfo('name') ?></a>
    </div>

    <div id="search" class="navbar-form navbar-left">
        <?php get_search_form(); ?>
    </div>
    <?php
    wp_nav_menu(array(
        'menu' => 'main-menu',
        'theme_location' => 'main-menu',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'bs-example-navbar-collapse-1',
        'menu_class' => 'nav navbar-nav',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker())
    );
    ?>
</nav>