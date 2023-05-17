<?php


include_once __DIR__ . "/Computer.php";
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";


class Personal extends Computer
{
    function __construct(public String $brand, public String $model, Monitor $monitor, Keyboard $keyboard, public String $RAM, public String $memory, public String $CPU, public String $imagePath, public String $battery, public $touchpad, public $laptopChassis,)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        $this->laptopChassis = $laptopChassis;
    }

    public function getType()
    {
        return "Personal";
    }
}
