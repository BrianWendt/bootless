<?php
require_once __DIR__ . '/include.php';
require_once __DIR__ . '/lib/Bootless.php';

add_action('after_setup_theme', 'blankslate_setup');

function blankslate_setup() {
    load_theme_textdomain('blankslate', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    global $content_width;
    if (!isset($content_width))
        $content_width = 640;
    register_nav_menus(
            array('main-menu' => __('Main Menu', 'blankslate'))
    );
}

add_action('wp_enqueue_scripts', 'blankslate_load_scripts');

function blankslate_load_scripts() {
    wp_enqueue_script('jquery');
}

add_action('comment_form_before', 'blankslate_enqueue_comment_reply_script');

function blankslate_enqueue_comment_reply_script() {
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'blankslate_title');

function blankslate_title($title) {
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'blankslate_filter_wp_title');

function blankslate_filter_wp_title($title) {
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'blankslate_widgets_init');

function blankslate_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'blankslate'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function blankslate_custom_pings($comment) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'blankslate_comments_number');

function blankslate_comments_number($count) {
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

/* Bootless Functions */

function bootless_scripts() {
    wp_enqueue_style('bootless', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.min.js');
    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'bootless_scripts');

add_action('after_setup_theme', 'wpt_setup');

function wpt_setup() {
    register_nav_menu('primary', __('Primary navigation', 'wptuts'));
}

require_once __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'wp_bootstrap_navwalker.php';

if (is_admin()) {
    require_once __DIR__ . '/lib/BootlessController.php';
    add_action('admin_menu', 'add_bootless_menu');

    function add_bootless_menu() {
        $Controller = new BootlessController();
        $capability = 'manage_options';
        add_menu_page('Bootless Theme Settings', 'Theme Settings', $capability, 'bootless', [$Controller, 'settings'], 'dashicons-admin-customizer', 61);
        add_submenu_page('bootless', 'Customize Bootstrap', 'Customize Bootstrap', $capability, 'bootless_variables', [$Controller, 'variables']);
    }

}

function boolChecked($bool) {
    return ($bool) ? 'checked' : '';
}

function boolSelected($bool) {
    return ($bool) ? 'selected' : '';
}

function bootless_comment_form() {
    $args = [
        'comment_field' => '<p class="comment-form-comment form-group"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></p>',
        'class_submit' => 'btn btn-primary'
    ];
    comment_form($args);
}
