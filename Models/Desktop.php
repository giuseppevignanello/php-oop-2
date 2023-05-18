<?php

include_once __DIR__ . "/Computer.php";
include_once __DIR__ . "/Monitor.php";
include_once __DIR__ . "/Keyboard.php";


class Desktop extends Computer
{
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected String $motherboard, protected String $graphicsCard, protected String $powerSupply)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->powerSupply = $powerSupply;
    }

    public function getMotherboard()
    {
        return $this->motherboard;
    }
    public function getGraphicCard()
    {
        return $this->graphicsCard;
    }
    public function getPowerSupply()
    {
        return $this->powerSupply;
    }

    public function getType()
    {
        return "Desktop";
    }
}
