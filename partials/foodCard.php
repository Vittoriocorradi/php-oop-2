<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $food->getImage(); ?>" alt="<?php echo $food->getName(); ?>">
        </div>
        <h3><?php echo $food->getName(); ?></h3>
        <ul>
            <li><?php echo $food->getType()->getType() ?></li>
            <li><?php echo $food->getPrice(); ?></li>
            <li><?php echo $food->getWeight(); ?></li>
            <li><?php echo "Ingredienti: " . implode(', ', $food->getIngredients()); ?></li>
        </ul>
    </div>
</div>