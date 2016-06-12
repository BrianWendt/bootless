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
        <div id="wrapper">
            <header id="header" role="banner" class="container">
                <?php include Bootless::element('header', 'branding'); ?>
                <?php include Bootless::element('header', 'main-menu'); ?>
            </header>
            <div id="container" class="container">