
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
<section
    <div class="movie_detail">
        <div class="image">
            <img src="<?= $movie->photo; ?>" alt="">
        </div>
        <div class="content">
            <h2><?= $movie->title; ?> </h2>
            <h3>Bestel tickets voor <?= $schedule->start_date ?> in <?= $schedule->name ?> </h3>
            <form method="POST" action="/movie/order/">
                <div class="seats">
                    <?php
                        for ($row= $schedule->rows; $row> 0; $row--){
                            echo '<div class="row">';
                            echo '<span>'. $row . '</span>';
                            for ($seat = 1; $seat <=$schedule->seats; $seat++){
                                $seat_ref=$row . ';' . $seat;
                                if (in_array($seat_ref, $ordered_seats)){
                                    echo '<div class="seat seat-ordered"></div>';
                                } else {
                                    echo '<input type="checkbox" name="seats[]" value="'. $seat_ref .'" class="seat">';
                                }
                            }
                            echo '</div>';
                        }
                    ?>
                </div>

                <p><label for="firstname">voornaam</label><input type="text" name="firstname" id="firstname"></p>
                <p><label for="lastname">naam</label><input type="text" name="lastname" id="lastname"></p>
                <p><label for="email">email</label><input type="email" name="email" id="email"></p>
                <input type="hidden" name="schedule_id" value="<?= $schedule->schedule_id?>">
                <button type="submit">koop tickets</button>
            </form>
        </div>
    </div>

</section>
</body>
</html>