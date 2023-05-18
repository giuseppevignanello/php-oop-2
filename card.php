<div class="card m-3 p-2" style="width: 18rem;">
    <img class="card-img-top img-fluid" src="<?= $computer->getImagePath() ?>" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $computer->getBrand() ?> <?= $computer->getModel() ?> </h5>
        <h6 class="card-subtitle mb-2 text-muted "><?= $computer->getType() ?> </h6>
        <?php include __DIR__ . "/accordion.php" ?>
    </div>
</div>