<?php

class BootlessController {

    public function settings() {
        if (!empty($_POST)) {
            Bootless::optionsSave($_POST['option']);
        }
        require BOOTLESS_ADMIN . 'settings.php';
    }

    public function variables() {
        if (is_file(BOOTLESS . 'css/custom.less')) {
            $custom = file_get_contents(BOOTLESS . 'css/custom.less');
        } else {
            $custom = '';
        }
        if (!empty($_POST)) {
            Bootless::variablesSave($_POST['var']);
            $custom = $_POST['custom'];
            file_put_contents(BOOTLESS . 'css/custom.less', $custom);
            if ($_POST['save'] == 'compile') {
                require BOOTLESS_ADMIN . 'compiler.php';
            }
        }
        require BOOTLESS_ADMIN . 'variables.php';
    }

}
