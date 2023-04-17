<div class="col-4 p-3">
    <div class="border">
        <div class="img">
            <img src="<?php echo $accessory->getImage(); ?>" alt="<?php echo $accessory->name; ?>">
        </div>
        <h3><?php echo $accessory->name; ?></h3>
        <ul>
            <li><?php echo $accessory->type->type ?></li>
            <li><?php echo $accessory->getPrice(); ?></li>
            <li><?php echo $accessory->materials; ?></li>
            <li>
                <?php if ($accessory->size === 'ND') {
                    echo 'ND';
                } else {
                    echo implode(',', $accessory->size);
                }
                ?>
            </li>
        </ul>
    </div>
</div>