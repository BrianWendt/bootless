<?php

class Bootless {

    static $default_options = [
        'nav_position' => 'top',
        'content_class' => 'col-md-9',
        'sidebar' => 1,
        'sidebar_class' => 'col-md-3'
    ];
    static $options = null;
    static $variables = null;
    
    static $nav_positions = [
        'top' => 'Top',
        'branding' => 'Below Branding'
    ];

    static function element($type, $name) {
        return BOOTLESS . 'elements' . DS . $type . DS . $name . '.php';
    }

    static function option($name, $default = '') {
        $options = self::options();
        return isset($options[$name]) ? $options[$name] : self::optionDefault($name, $default);
    }

    static function optionDefault($name, $default = '') {
        return isset(self::$default_options[$name]) ? self::$default_options[$name] : $default;
    }

    static function options() {
        if (self::$options == null) {
            $options = get_option('bootless_options', '{}');
            self::$options = json_decode($options, 1);
        }
        return self::$options;
    }

    static function optionsSave($options = false) {
        $options = json_encode(($options) ? $options : self::$options);
        update_option('bootless_options', $options);
    }

    static function variable($name, $default = '') {
        $variables = self::variables();
        return isset($variables[$name]) ? $variables[$name] : $default;
    }

    static function variables() {
        if (self::$variables == null) {
            $variables = get_option('bootless_variables', '{}');
            self::$variables = json_decode($variables, 1);
        }
        return self::$variables;
    }

}
