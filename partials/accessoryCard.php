<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $accessory->getImage(); ?>" alt="<?php echo $accessory->getName(); ?>">
        </div>
        <h3><?php echo $accessory->getName(); ?></h3>
        <ul class="list-group">
            <li class="list-group-item border-0"><?php echo $accessory->getType()->getType() ?></li>
            <li class="list-group-item border-0"><?php echo $accessory->getPrice(); ?></li>
            <li class="list-group-item border-0"><?php echo $accessory->getWeight(); ?></li>
            <li class="list-group-item border-0"><?php echo $accessory->materials; ?></li>
            <li class="list-group-item border-0"><?php echo $accessory->size; ?></li>
        </ul>
    </div>
</div>