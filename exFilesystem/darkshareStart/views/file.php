<?php
    $file_path = UPLOAD_PATH . '/' .$item;

    if( ! is_dir($file_path)) {
        $size = human_filesize(filesize($file_path));

        $path_info = pathinfo($file_path);
        $extension = $path_info['extension'];
?>

<div class="file">
    <div class="icon icon-<?= $extension; ?>">
        <span>
            <?= $extension; ?>
        </span>
    </div>

    <div class="file">
        <div class="file_info">
            <strong><?= $item  ?> </strong><br>
            <?= $size ?>
    </div>

        <div class="buttons">
        <?php if($extension === 'txt') : ?>
            <a href="edit.php?file=<?= $item; ?>" class="btn">Edit</a>
        <?php endif; ?>
            <a href="<?= $file_path; ?>" class="btn" download>Download</a>
        </div>
    </div>
</div>

<?php
//        close if
    } ?>