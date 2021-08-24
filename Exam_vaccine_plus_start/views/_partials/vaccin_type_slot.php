<?php

$vaccinslot = (object) $vaccinslot;
//echo '<pre>';
//print_r($vaccinslot);
//echo '</pre>'

?>


    <span class="name">Vaccin <label>#<?= $vaccinslot->vaccin_id ?> beschikbaar tot </label><?= date("D d M H:i", strtotime($vaccinslot->available)); ?> </span>

