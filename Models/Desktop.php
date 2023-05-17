<?php

include_once __DIR__ . "/Computer.php";
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";


class Desktop extends Computer
{
    function __construct(public String $brand, public String $model, Monitor $monitor, Keyboard $keyboard, public String $RAM, public String $memory, public String $CPU, public String $imagePath, public String $motherboard, public String $graphicsCard, public String $powerSupply)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->powerSupply = $powerSupply;
    }
}
