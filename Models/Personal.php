<?php


include_once __DIR__ . "/Computer.php";
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";
include_once __DIR__ . "/../Traits/Weighable.php";


class Personal extends Computer
{
    use Weighable;
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected float $weight, protected String $battery, protected $touchpad, protected $laptopChassis,)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath, $weight);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        $this->laptopChassis = $laptopChassis;
    }

    public function getBattery()
    {
        return $this->battery;
    }

    public function getTouchpad()
    {
        return $this->touchpad;
    }

    public function getLaptopChassis()
    {
        return $this->laptopChassis;
    }

    public function getType()
    {
        return "Personal";
    }
}
