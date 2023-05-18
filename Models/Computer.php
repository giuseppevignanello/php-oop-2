<?php
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";
include_once __DIR__ . "/../Traits/Weighable.php";

class Computer
{
    use Weighable;
    public $monitor;
    public $keyboard;
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected float $weight)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->monitor = $monitor;
        $this->keyboard = $keyboard;
        $this->RAM = $RAM;
        $this->memory = $memory;
        $this->CPU = $CPU;
        $this->imagePath = $imagePath;
        $this->setWeight($weight);
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
        if (!is_int($this->RAM)) {
            throw new Exception('Is not a number');
        }
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

    public function getWeight()
    {
        return $this->weight;
    }

    public function getType()
    {
        return "Computer";
    }
}