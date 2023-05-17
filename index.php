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
include_once __DIR__ . "/Models/Monitor.php";
include_once __DIR__ . "/Models/Keyboard.php";
include __DIR__ . "/db.php";

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


class Desktop extends Computer
{
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected String $motherboard, protected String $graphicsCard, protected String $powerSupply)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->powerSupply = $powerSupply;
    }
}

class Personal extends Computer
{
    function __construct(protected String $brand, protected String $model, Monitor $monitor, Keyboard $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected String $battery, protected $touchpad, protected $laptopChassis,)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        $this->laptopChassis = $laptopChassis;
    }
}

var_dump($computers)

?>