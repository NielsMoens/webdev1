<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    <link href="../../style/main.css" rel="stylesheet">

</head>
<body>
    <section>
        <div class="movies">
            <?php
                foreach ($movies as $movie){
                    include BASE_DIR . '/views/movie/_partials/movie_list_item.php';
                }
            ?>
        </div>
    </section>

</body>
</html>