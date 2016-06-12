<?php

class Bootless {
    
    static function element($type, $name){
        return BOOTLESS . 'elements' . DS . $type . DS . $name . '.php';
    }
    
    static function variable($name){
        return $name;
    }
}
