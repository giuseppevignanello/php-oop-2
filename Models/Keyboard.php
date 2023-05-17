<?php 

class Keyboard {

    function __construct(public String $name, public String $language) {
        $this->name = $name; 
        $this->language =$language;
    }
}
