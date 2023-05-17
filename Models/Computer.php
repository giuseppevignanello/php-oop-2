<?php
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";

class Computer
{
    public $monitor;
    public $keyboard;
    function __construct(public String $brand, public String $model, Monitor $monitor, Keyboard $keyboard, public String $RAM, public String $memory, public String $CPU, public String $imagePath)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->monitor = $monitor;
        $this->keyboard = $keyboard;
        $this->RAM = $RAM;
        $this->memory = $memory;
        $this->CPU = $CPU;
        $this->imagePath = $imagePath;
    }

    public function getType(){
        return "Computer";
    }
}