<?php
$nav_container_class = '';
if (BOOTLESS::option('nav_sticky')) {
    $nav_container_class .= 'navbar-fixed-top ';
}
if (BOOTLESS::option('nav_contain')) {
    $nav_container_class .= 'container ';
}
?>
<div class="<?php echo $nav_container_class ?>">
    <?php
    $nav_class = 'navbar ';
    if (!BOOTLESS::option('nav_contain')) {
        $nav_class .= 'container-fluid ';
    }
    $nav_class .= 'navbar-default ';
    ?>
    <nav id="main-menu" role="navigation" class="<?php echo $nav_class ?>">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-links" aria-expanded="false">
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
            'container_id' => 'main-menu-links',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker())
        );
        ?>
    </nav>
</div>