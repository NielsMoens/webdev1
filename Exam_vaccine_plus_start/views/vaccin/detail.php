<?php
//echo '<pre>';
//print_r($vaccin);
//echo '</pre>';

?>



<section><h1><?= $vaccin[0]['name']?><span class="badge"><span> <?= count($vaccin) ?> beschikbare vaccins</span></h1>

    <p>
        <?= $vaccin[0]['street'] . ' ' . vaccin[0]['nr']?><br>
        <?= $vaccin[0]['postalcode'] . ' ' . $vaccin[0]['city']?>
    </p>

    <h2><?= count($vaccin) ?> beschikbare vaccins</h2>
    <div class="list">

            <?php
            foreach($vaccin as $vaccinslot) { ?>
                <div class="list-item">
                <?php  include BASE_DIR . '/views/_partials/vaccin_type_slot.php';?>

                 </div>
           <?php }?>


    </div>
    <a href="<?= URI ?>vaccin/order/<?=$vaccin[0]['center_id']?>" class="btn btn-primary">Ik wil er een</a>





    <a href="<?= URI ?>vaccin/index">Terug naar alle vaccinatiecentra</a></section>
