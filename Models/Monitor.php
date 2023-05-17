<?php 

class Monitor {

    function __construct(public String $name, public Int $inch ){
        $this->name =$name; 
        $this->inch=$inch; 
    }
}
