<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $accessory->getImage(); ?>" alt="<?php echo $accessory->getName(); ?>">
        </div>
        <h3><?php echo $accessory->getName(); ?></h3>
        <ul>
            <li><?php echo $accessory->getType()->getType() ?></li>
            <li><?php echo $accessory->getPrice(); ?></li>
            <li><?php echo $accessory->getWeight(); ?></li>
            <li><?php echo $accessory->materials; ?></li>
            <li>
                <?php if ($accessory->size === 'ND') {
                    echo 'ND';
                } else {
                    // echo implode(',', $accessory->size);
                    echo $accessory->size;
                }
                ?>
            </li>
        </ul>
    </div>
</div>