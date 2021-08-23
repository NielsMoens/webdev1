<?php

$photo = (object) $photo;

?>

<div class="card">
        <img src="<?= URI?>images/<?= $photo->src?>" alt="<?= $photo->title?>" class="card-image">
        <div class="card-info">
            <h2 class="card-title"><?= $photo->title?></h2>
            <span><i class="demo-icon icon-user"></i> <a href="<?= URI ?>"><?= $photo->firstname?></a></span> 
            <span><i class="demo-icon icon-heart"></i><?= $photo->likes . ' likes' ?></span>
        </div>
        <a href="#" class="btn-like"><i class="demo-icon icon-heart-full"></i></a>
    </div>