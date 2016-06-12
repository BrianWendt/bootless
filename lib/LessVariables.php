<?php

class LessVariables {

    public $parser;
    public $rules = [];

    public function __construct($file) {
        $this->parser = new Less_Parser();
        
        $this->parser->SetInput($file);
        
        $reflector = new ReflectionObject($this->parser);
        
        $method = $reflector->getMethod('parsePrimary');
        $method->setAccessible(true);
        
        $root = $method->invoke($this->parser);
        var_dump($root);
        return;
        
        $reflector = new ReflectionObject($this->parser);
        $method = $reflector->getMethod('GetRules');
        $method->setAccessible(true);
        
        $rules = $method->invoke($this->parser, $file);
        
        $this->ruleset = new Less_Tree_Ruleset(array(), $rules);
        
        var_dump($this->ruleset->variable('@gray-base'));
        return;
        var_dump($ruleset->compile(''));
        exit;
        
        
        foreach($rules as $rule){
            if($rule instanceof Less_Tree_Rule){
                $this->rules[$rule->name] = $rule;
            }
        }
        var_dump($this->read('@gray-base'));
    }
    
    public function read($name){
        if($name[0] != '@'){
            $name = '@' . $name;
        }
        $value = $this->rules[$name]->value->value[0];
        switch(get_class($value)){
            case 'Less_Tree_Expression':
                return $value->value;
        }
    }
}
