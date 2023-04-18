<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $toy->getImage(); ?>" alt="<?php echo $toy->getName(); ?>">
        </div>
        <h3><?php echo $toy->getName(); ?></h3>
        <ul class="list-group">
            <li class="list-group-item border-0"><?php echo $toy->getType()->getType() ?></li>
            <li class="list-group-item border-0"><?php echo $toy->getPrice(); ?></li>
            <li class="list-group-item border-0"><?php echo $toy->getWeight(); ?></li>
            <li class="list-group-item border-0"><?php echo $toy->feature; ?></li>
            <li class="list-group-item border-0"><?php echo $toy->dimensions; ?></li>
        </ul>
    </div>
</div>