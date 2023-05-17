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
    function __construct(protected String $brand, protected String $model, protected String $monitor, protected String $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath)
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
    function __construct(protected String $brand, protected String $model, protected String $monitor, protected String $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected String $motherboard, protected String $graphicsCard, protected String $powerSupply)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->motherboard = $motherboard;
        $this->graphicsCard = $graphicsCard;
        $this->powerSupply = $powerSupply;
    }
}

class Personal extends Computer
{
    function __construct(protected String $brand, protected String $model, protected String $monitor, protected String $keyboard, protected String $RAM, protected String $memory, protected String $CPU, protected String $imagePath, protected String $battery, protected $touchpad, protected $laptopChassis,)
    {
        parent::__construct($brand, $model, $monitor, $keyboard, $RAM, $memory, $CPU, $imagePath);
        $this->battery = $battery;
        $this->touchpad = $touchpad;
        $this->laptopChassis = $laptopChassis;
    }
}


$computers = [

    $XPSTower = new Desktop("Dell", "XPS Tower", "UltraSharp U2720Q", "KB216 Wired Keyboard", "16GB", "1TB", "Intel Core i7", "https://picsum.photos/200/300", "ASUS Prime Z590-A", "NVIDIA GeForce RTX 3080", "850w Power Supply")

];

var_dump($computers[0])

?>