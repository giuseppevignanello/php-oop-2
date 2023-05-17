<!-- Immaginiamo le classi per modellizzare un personal computer.
Un computer desktop é un computer.
Un computer portatile é un computer.
Creiamo la classe computer come parent class ed estendiamola per le classi desktop e laptop.
Creiamo un set di dati in forma di array di oggetti e stampiamoli a schermo in una card usando bootstrap.
Nella card, indichiamo anche che tipo di prodotto stiamo visualizzando (desktop, laptop) creando un apposito metodo poliforfo in ciascuna sottoclasse.
BONUS:
pensate a cosa compone un pc: 'ha un' monitor? 'ha una' mbo? 'ha una' keyboard? usate la composizione per indicare costruire appropriatamente le istanze.
aggiungere un metodo che stampi la stringa con tutte le info del dispositivo (oltre ai getter/setters necessari). -->

<?php

class Computer
{




    function __construct(protected String $brand, protected String $model, protected String $monitor, protected String $keyboard, protected String $RAM, protected String $memory, protected String $CPU)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->monitor = $monitor;
        $this->keyboard = $keyboard;
        $this->RAM = $RAM;
        $this->memory = $memory;
        $this->CPU = $CPU;
    }
}


class Desktop extends Computer
{
    function __construct(protected String $motherboard, protected String $graphicsCard, protected String $powerSupply)
    {
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->powerSupply = $powerSupply;
    }
}

class Personal extends Computer
{
    function __construct(protected String $battery, protected $touchpad, protected $laptopChassis,)
    {
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        $this->laptopChassis = $laptopChassis;
    }
}


$computers = []

?>