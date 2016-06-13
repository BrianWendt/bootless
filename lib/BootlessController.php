<?php

class BootlessController {
    
    public function settings(){
        if(!empty($_POST)){
            Bootless::optionsSave($_POST['option']);
        }
        require BOOTLESS_ADMIN . 'settings.php';
    }
}