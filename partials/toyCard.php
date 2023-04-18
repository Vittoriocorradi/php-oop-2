<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $toy->getImage(); ?>" alt="<?php echo $toy->getName(); ?>">
        </div>
        <h3><?php echo $toy->getName(); ?></h3>
        <ul>
            <li><?php echo $toy->getType()->getType() ?></li>
            <li><?php echo $toy->getPrice(); ?></li>
            <li><?php echo $toy->getWeight(); ?></li>
            <li><?php echo $toy->feature; ?></li>
            <li><?php echo implode(',', $toy->dimensions); ?></li>
        </ul>
    </div>
</div>