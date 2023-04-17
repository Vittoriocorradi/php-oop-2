<div class="col-4 p-3">
    <div class="border">
        <div class="img">
            <img src="<?php echo $food->getImage(); ?>" alt="<?php echo $food->name; ?>">
        </div>
        <h3><?php echo $food->name; ?></h3>
        <ul>
            <li><?php echo $food->type->type ?></li>
            <li><?php echo $food->getPrice(); ?></li>
            <li><?php echo $food->weight; ?></li>
            <li><?php echo implode(',', $food->ingredients); ?></li>
        </ul>
    </div>
</div>