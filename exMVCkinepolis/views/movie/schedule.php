
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
            <h2><?= $movie->title; ?> </h2>
            <h3>Bestel tickets voor <?= $schedule->start_date ?> </h3>

            <form method="POST" action="/webdev1/exMVCkinepolis/movie/order/">
                <p><label for="firstname">voornaam</label><input type="text" name="firstname" id="firstname"></p>
                <p><label for="lastname">naam</label><input type="text" name="lastname" id="lastname"></p>
                <p><label for="email">naam</label><input type="email" name="email" id="email"></p>
                <button type="submit">koop tickets</button>
            </form>
        </div>
    </div>

</section>

</body>
</html>