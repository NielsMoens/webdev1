<?php
// convert array to object
$movie = (object) $movie;

?>

<a href="movie/detail/<?= $movie->movie_id ?>" class="movie">
    <img src="<?= $movie->photo; ?>" alt="">
    <h2><?=  $movie->title ?></h2>
    <p><?= substr($movie->description, 0, 100) ?> ...</p>
</a>