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

<?php include __DIR__ . "/head.php" ?>
<?php include __DIR__ . "/header.php" ?>
<?php include __DIR__ . "/jumbotron.php" ?>
<?php include __DIR__ . "/cards.php" ?>





<footer class="bg-light text-center text-lg-start mt-3">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-dark" href="https://mdbootstrap.com/">Giuseppe Vignanello</a>
    </div>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>