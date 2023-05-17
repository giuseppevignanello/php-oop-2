<?php 
include_once __DIR__."/Monitor.php"; 
include_once __DIR__."/Keyboard.php"; 

class Computer
{
    protected $monitor;
    protected $keyboard;
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath)
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
}
