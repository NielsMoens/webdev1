<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixels</title>
    <link rel="stylesheet" href="<?= URI?>fontello/css/fontello.css">
    <link rel="stylesheet" href="<?= URI?>css/style.css">
</head>
<body>
    <header>
        <a href="<?= URI ?>" class="brand">Pixels</a>
        <form method="post">
            <input type="text" name="search_string" placeholder="What do you want to see?">
            <button type="submit" class="btn"><i class="demo-icon icon-search"></i></button>
        </form>
        <nav>
            <?php if(!$current_user): ?>
            <!-- Items enkel indien niet ingelogd  -->
            <a href="<?=URI?>user/login">Inloggen</a>
            <!-- Items enkel indien ingelogd -->
            <?php else : ?>
            <a href="<?=URI?>photo/upload">Upload</a>
            <a href="<?=URI?>photo/myPhotos">Mijn fotos</a>
            <a href="<?=URI?>user/logout">Uitloggen</a>
            <?php endif; ?>
        </nav>
    </header>