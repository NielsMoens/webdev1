<?php

$vaccin = (object) $vaccin;

if($vaccin->center_id == 1) {
    $total = $total1;
}

if($vaccin->center_id == 2) {
    $total = $total2;
}

if($vaccin->center_id == 3) {
    $total = $total3;

}

?>


<a  class="list-item" href="<?=URI?>vaccin/detail/<?= $vaccin->center_id ?>"><?= $vaccin->name . ' ' . $vaccin->city?><span class="badge badge-primary"><?= $total ?> vaccins</span>

