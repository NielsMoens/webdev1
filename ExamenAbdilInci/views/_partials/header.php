<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccin+</title>
    <link rel="stylesheet" href="<?= URI ?>style/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<header>
    <a class="brand" href="<?= URI ?>">Vaccine<span>+</span></a>

    <div class="extra">
    <?php if(!$current_user): ?>
            <!-- Items enkel indien niet ingelogd  -->
            <a href="<?=URI?>user/login">Inloggen</a>
            <!-- Items enkel indien ingelogd -->
            <?php else : ?>
                <a href="<?=URI?>vaccin/admin" class="btn">Vaccins</a>
            <a href="<?=URI?>vaccin/instructions" class="btn">Instructies</a>
            <a href="<?=URI?>user/logout">Uitloggen</a>
            <?php endif; ?>
            </div>
</header>