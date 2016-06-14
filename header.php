<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper" class="<?php echo (strpos(Bootless::option('nav_position'), 'sticky') !== false) ? 'nav_sticky' : '' ?>">
            <?php if (strpos(Bootless::option('nav_position'), 'top') !== false) include Bootless::element('header', 'main-menu'); ?>
            <header id="header" role="banner" class="container">
                <?php include Bootless::element('header', 'branding'); ?>
            </header>
            <?php if (Bootless::option('nav_position') == 'branding') include Bootless::element('header', 'main-menu'); ?>
            <div id="container" class="container">