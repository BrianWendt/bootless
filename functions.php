<?php
require_once __DIR__ . '/include.php';
require_once __DIR__ . '/lib/Bootless.php';

add_action('after_setup_theme', 'bootless_setup');
$content_width = 848;

function bootless_setup() {
    global $content_width;
    load_theme_textdomain('bootless', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    register_nav_menus(
            array('main-menu' => __('Main Menu', 'bootless'))
    );

    $custom_header = array(
        'flex-width' => true,
        'width' => $content_width,
        'flex-height' => true,
        'height' => 200
    );
    add_theme_support('custom-header', $custom_header);
}

add_image_size('index-featured', $content_width, ($content_width / 3), array('center', 'center'));
add_image_size('single-featured', $content_width, null);

add_action('wp_enqueue_scripts', 'bootless_load_scripts');

function bootless_load_scripts() {
    wp_enqueue_script('jquery');
}

add_action('comment_form_before', 'bootless_enqueue_comment_reply_script');

function bootless_enqueue_comment_reply_script() {
    if (get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_filter('the_title', 'bootless_title');

function bootless_title($title) {
    if ($title == '') {
        return '&rarr;';
    } else {
        return $title;
    }
}

add_filter('wp_title', 'bootless_filter_wp_title');

function bootless_filter_wp_title($title) {
    return $title . esc_attr(get_bloginfo('name'));
}

add_action('widgets_init', 'bootless_widgets_init');

function bootless_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'bootless'),
        'id' => 'primary-widget-area',
        'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
        'after_widget' => "</li>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

function bootless_custom_pings($comment) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
    <?php
}

add_filter('get_comments_number', 'bootless_comments_number');

function bootless_comments_number($count) {
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

function bootless_scripts() {
    wp_enqueue_style('bootless', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'bootless_scripts');

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

    function bootless_admin_scripts() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_register_script('my-upload', get_template_directory_uri() . '/admin/script.js', array('jquery', 'media-upload', 'thickbox'));
        wp_enqueue_script('my-upload');
    }

    function bootless_admin_styles() {
        wp_enqueue_style('thickbox');
        wp_register_style('admin_bootstrap', get_template_directory_uri() . '/css/admin_bootstrap.css');
        wp_enqueue_style('admin_bootstrap');
    }

    if (isset($_GET['page']) && substr($_GET['page'], 0, 8) == 'bootless') {
        add_action('admin_print_scripts', 'bootless_admin_scripts');
        add_action('admin_print_styles', 'bootless_admin_styles');
    }
}

function bootless_checked($bool) {
    return ($bool) ? 'checked' : '';
}

function bootless_selected($bool) {
    return ($bool) ? 'selected' : '';
}

function bootless_comment_form() {
    $args = [
        'comment_field' => '<p class="comment-form-comment form-group"><label for="comment">' . _x('Comment', 'noun') . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control"></textarea></p>',
        'class_submit' => 'btn btn-primary'
    ];
    comment_form($args);
}

function bootless_comment($comment, $args, $depth) {
    include __DIR__ . '/comment.php';
}
