<?php
include_once  'config.php';
include_once 'functions.php';

$items = scandir(UPLOAD_PATH);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DarkShare</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<h1>DarkShare</h1>

<section>
    <form>
        <input type="file" class="input"> 
        <input type="submit" value="Share" class="btn">
    </form>
</section>
<section>
    <h2>Shared files</h2>
    <div class="filter">
        <form>
            <input type="text" name="q">
            <input type="submit" value="Search" class="btn">
        </form>
        <div class="view_switch">
            <a href="?view=list">list</a>
            <a href="?view=grid">grid</a>
        </div>
    </div>
    <div class="file-list list"> <!-- or grid as class -->
        <?php
            foreach ($items as $item) {
                include 'views/file.php';
            }
        ?>
    </div>

    <div class="paging">
        <a href="?page=1" class="current">1</a>
        <a href="?page=2">2</a>
        <a href="?page=3">3</a>
        <a href="?page=4">4</a>
        <a href="?page=5">5</a>
    </div>
</section>

</body>
</html>