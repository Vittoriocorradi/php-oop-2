<div class="col-4 p-3">
    <div class="border box">
        <div class="img">
            <img src="<?php echo $food->getImage(); ?>" alt="<?php echo $food->getName(); ?>">
        </div>
        <h3><?php echo $food->getName(); ?></h3>
        <ul class="list-group">
            <li class="list-group-item border-0"><?php echo $food->getType()->getType() ?></li>
            <li class="list-group-item border-0"><?php echo $food->getPrice(); ?></li>
            <li class="list-group-item border-0"><?php echo $food->getWeight(); ?></li>
            <li class="list-group-item border-0"><?php echo "Ingredienti: " . implode(', ', $food->getIngredients()); ?></li>
        </ul>
    </div>
</div>