<div class="col-4 blue">
    <div class="img">
        <img src="<?php echo $toy->getImage(); ?>" alt="<?php echo $toy->name; ?>">
    </div>
    <h3><?php echo $toy->name; ?></h3>
    <ul>
        <li><?php echo $toy->type->type ?></li>
        <li><?php echo $toy->getPrice(); ?></li>
        <li><?php echo $toy->feature; ?></li>
        <li><?php echo implode(',', $toy->dimensions); ?></li>
    </ul>
</div>