<main>
    <div class="contianer">
        <div class="cards row justify-content-center">

            <?php foreach ($computers as $computer) {
            ?>
                <?php include __DIR__ . "/card.php" ?>
            <?php } ?>
        </div>
    </div>
</main>