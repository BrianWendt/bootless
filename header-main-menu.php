<?php
$nav_container_class = '';
if (strpos(Bootless::option('nav_position'), 'sticky') !== false) {
    $nav_container_class .= 'navbar-fixed-top ';
}
if (strpos(BOOTLESS::option('nav_mode'), 'fluid') === false) {
    $nav_container_class .= 'container';
}

$nav_class = 'navbar ';
if (strpos(BOOTLESS::option('nav_mode'), 'fluid') !== false) {
    //$nav_class .= 'container-fluid ';
}
$nav_class .= 'navbar-default ';

$nav_inside_class = '';
switch (Bootless::option('nav_mode')) {
    case 'fluid-contain':
        $nav_inside_class .= 'container ';
        break;
    default:
        $nav_inside_class .= 'container-fluid ';
        break;
}
?>
<div class="<?php echo $nav_container_class ?>">
    <nav id="main-menu" role="navigation" class="<?php echo $nav_class ?>">
        <div class="<?php echo $nav_inside_class ?>"  >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if (Bootless::option('nav_brand')) { ?>
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php echo Bootless::option('nav_brand') ?></a>
                <?php } ?>
            </div>

            <div id="search" class="navbar-form navbar-right">
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

        </div>
    </nav>
</div>