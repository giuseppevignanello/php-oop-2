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