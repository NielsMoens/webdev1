<?php
    $file_path = UPLOAD_PATH . '/' .$item;

    if( ! is_dir($file_path)) {
        $size = human_filesize(filesize($file_path));

        $finfo = new finfo();
        $fileMineType= $finfo->file($file_path, FILEINFO_MIME_TYPE)

//        $mine_type = mine_content_type($file_path);
?>

<div class="file">
    <div class="icon icon-image">
        <img src="uploads/voorbeeld_afbeelding.jpg">
    </div>

    <div class="icon icon-txt">
        <span>
            txt
        </span>
    </div>

    <div class="file">
        <div class="file_info">
            <strong><?= $item . '-' . $fileMineType ?> </strong><br>
            <?= $size ?>
    </div>

        <div class="buttons">
            <a href="edit.php?file=voorbeeld_text_bestand.txt" class="btn">Edit</a>
            <a href="uploads/voorbeeld_text_bestand.txt" class="btn" download>Download</a>
        </div>
    </div>
</div>

<?php
//        close if
    } ?>