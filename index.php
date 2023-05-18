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



// foreach ($computers as $computer) {
//     # code...
//     try {
//         echo $computer->getRAM();
//     } catch (Exception $e) {
//         echo $e->getMessage();
//     }
// }


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

<body class="bg-dark">

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
        <div class="contianer">
            <div class="cards row justify-content-center">

                <?php foreach ($computers as $computer) {
                ?>
                <div class="card m-3 p-2" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="<?= $computer->getImagePath() ?>" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $computer->getBrand() ?> <?= $computer->getModel() ?> </h5>
                        <h6 class="card-subtitle mb-2 text-muted "><?= $computer->getType() ?> </h6>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"> <strong> Monitor </strong>
                                                <?= $computer->monitor->name ?>
                                                <?= $computer->monitor->inch ?>
                                            </li>
                                            <li class="list-group-item"> <strong> Keyboard </strong>
                                                <?= $computer->keyboard->name ?><?= $computer->keyboard->language ?>
                                            </li>
                                            <li class="list-group-item"><strong> RAM </strong><?= $computer->getRAM() ?>
                                                GB </li>
                                            <li class="list-group-item"><strong> Memory
                                                </strong><?= $computer->getMemory() ?></li>
                                            <li class="list-group-item"><strong> CPU </strong><?= $computer->getCPU() ?>
                                            </li>
                                            <li class="list-group-item"><strong> Weight
                                                </strong><?= $computer->getWeight() ?> Kg
                                            </li>
                                            <li class="list-group-item">
                                                <strong>
                                                    <?= $computer->getType() === "Desktop" ? "MotherBoard " : "Battery " ?></strong><?= $computer->getType() === "Desktop" ? $computer->getMotherboard() : $computer->getBattery() ?>
                                            </li>
                                            <li class="list-group-item">
                                                <strong>
                                                    <?= $computer->getType() === "Desktop" ? "Graphics Card" : "TouchPad " ?></strong><?= $computer->getType() === "Desktop" ? $computer->getGraphicCard() : $computer->getTouchpad() ?>
                                            </li>
                                            <li class="list-group-item">
                                                <strong>
                                                    <?= $computer->getType() === "Desktop" ? "Power Supply" : "Laptop Chassis " ?></strong><?= $computer->getType() === "Desktop" ? $computer->getPowerSupply() : $computer->getLaptopChassis() ?>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Giuseppe Vignanello</a>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>