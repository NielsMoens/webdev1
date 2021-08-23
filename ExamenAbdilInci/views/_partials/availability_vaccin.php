<?php

$item = (object) $item;

?>

<div class="list-item available open">
        <div class="id"></div>
        <div class="date"></div>
        <div class="claimer">
            <div class="name"></div>
                                </div>
    </div>


    <?php

        $today = date("Y-m-d H:i:s");
        $date = $item->available;

        if ($date > $today) {
            echo '<div class="list-item available open">
            <div class="id">' . '#' . $item->vaccin_id . '</div>
            <div class="date">' . $item->available . '</div>
            <div class="claimer">
                <div class="name"></div>
                                    </div>
        </div>';

        }
?>


    <?php 
    if ($item->status == 1) {
        echo '<div class="list-item available">
        <div class="id">' . '#' .  $item->vaccin_id .  '</div>
        <div class="date">' . $item->available . '</div>
        <div class="claimer">
            <div class="name">' . $item->claimer . '</div>
                        <a href="mailto:dieter@deweirdt.be" class="btn btn-light btn-sm"><i class="fa fa-envelope"></i></a>
                                    <a href="tel:123456789" class="btn btn-light btn-sm"><i class="fa fa-mobile"></i></a>
                    </div>
    </div>';

    }
    ?>

    <?php

$today = date("Y-m-d H:i:s");
$date = $item->available;

if ($date < $today) {
    echo '    <div class="list-item open">
    <div class="id">' . '#' . $item->vaccin_id . '</div>
    <div class="date">' . $item->available . '</div>
    <div class="claimer">
        <div class="name"></div>
                            </div>
</div>';

}


?>


