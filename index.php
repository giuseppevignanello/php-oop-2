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

include_once __DIR__ . "/Models/Desktop.php";
include_once __DIR__ . "/Models/Personal.php";
include_once __DIR__ . "/Models/Computer.php";
include_once __DIR__ . "/Models/Monitor.php";
include_once __DIR__ . "/Models/Keyboard.php";
include __DIR__ . "/db.php";



var_dump($computers)

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Computers</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <div id="jumbotron" class="p-5 mb-4 bg-light rounded-3">

        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Need new computer?</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
                previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to
                your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>
    <main>
        <div class="card">
            <?php foreach ($computers as $computer) {
            ?>
            <img src="<?= $computer->imagePathERROREVOLONTARIO ?>" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $computer->brand ?> <?= $computer->model ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted "><?= $computer->getType() ?> </h6>
                <ul class="list-group">
                    <li class="list-group-item">Monitor <?= $computer->monitor->name ?> <?= $computer->monitor->inch ?>
                    </li>
                    <li class="list-group-item">Keyboard
                        <?= $computer->keyboard->name ?><?= $computer->keyboard->language ?>
                    </li>
                    <li class="list-group-item">RAM <?= $computer->RAM ?></li>
                    <li class="list-group-item">Memory <?= $computer->memory ?></li>
                    <li class="list-group-item">CPU <?= $computer->CPU ?></li>
                    <li class="list-group-item">
                        <?= $computer->getType() === "Desktop" ? "MotherBoard " : "Battery " ?><?= $computer->getType() === "Desktop" ? $computer->motherboard : $computer->battery ?>
                    </li>
                    <li class="list-group-item">
                        <?= $computer->getType() === "Desktop" ? "Graphics Card" : "TouchPad " ?><?= $computer->getType() === "Desktop" ? $computer->graphicsCard : $computer->touchpad ?>
                    </li>
                    <li class="list-group-item">
                        <?= $computer->getType() === "Desktop" ? "Power Supply" : "Laptop Chassis " ?><?= $computer->getType() === "Desktop" ? $computer->powerSupply : $computer->laptopChassis ?>
                    </li>

                </ul>
            </div>

            <?php } ?>
        </div>
    </main>
</body>

</html>