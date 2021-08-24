
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link href="../../style/main.css" rel="stylesheet">
    <style>

    </style>

</head>
<body>
<section>
    <div class="movie_detail">
        <div class="image">
            <img src="<?= $movie->photo; ?>" alt="">
        </div>
        <div class="content">
            <h2><?= $movie->title; ?></h2>
            <p><?= $movie->description; ?> </p>

            <h3>kies een tijdstipken</h3>
            <ul>
                <?php foreach ($schedule as $item) :
                   print_r($item) ?>
                    <li>
                        <a href="/movie/schedule/<?= $item['schedule_id']; ?>">
                            <?= $item['start_date']; ?> - <?= $item['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>

</section>

</body>
</html>