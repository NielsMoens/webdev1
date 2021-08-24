<?php
//echo '<pre>';
//print_r($center['instructions']);
//echo '</pre>';

?>


    <section><h1>Instructies voor bezoekers van <span class="badge"><?= $center['name'] ?>, <?= $center['city'] ?>,</span></h1>
        <?php
        if($center['instructions']){
            ?>
            <a href="/instructions/<?=$center['instructions'] ?>">Bekijk instructies </a>
            <?php
        } else {
           ?>
            <div class="error">Er is nog geen instructie PDF voor Brielpoort, Deinze opgeladen.</div>
            <?php
        }
        ?>

        <form method="POST" enctype="multipart/form-data">
            <h3>Instructies opladen</h3>
            <input type="file" name="my_image" id="my_image"><br>
            <sup>*</sup> Laad de instructies op als PDF
            <input type="hidden" name="center_id" value="<?= $center['center_id']?>">
            <div><button type="submit" class="btn btn-primary" name="submit">Opladen</button>
                <a href="<? URI ?>vaccin/index">Annuleren</a>
            </div>
        </form>

    </section>
<?php
print_r($_POST['center_id'])
?>
