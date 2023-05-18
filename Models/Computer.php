<?php
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";

class Computer
{
    public $monitor;
    public $keyboard;
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected Int $RAM, protected String $memory, protected String $CPU, protected String $imagePath)
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

    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getRAM()
    {
        return $this->RAM;
    }
    public function getCPU()
    {
        return $this->CPU;
    }
    public function getMemory()
    {
        return $this->memory;
    }
    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function getType()
    {
        return "Computer";
    }
}
