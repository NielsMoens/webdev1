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
        body {
            background-color: #e6ecf0;
            color: #333;
            font-size: 14px;
            line-height: 20px;
            overflow-y: scroll;
            position: relative;
        }

        section {
            max-width: 900px;
            margin: 20px auto;
            background: #fff;
            padding: 25px;
        }

        a {
            text-decoration: none;
            color: #A8B769;
        }

        .seats .row > span {
            width: 50px;
        }

        .seats .row > .seat {
            width: 30px;
            height: 30px;
            background: #ccc;
            border: solid 1px #999;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            text-align: center;
            margin: 3px;
        }

        .seats .row > .seat.seat-ordered {
            background: hsl(38, 77%, 57%);
            border: solid 1px hsl(38, 77%, 45%);
        }

        .movies {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .movies .movie {
            width: 30%;
            margin: 1%;
            border: solid 1px #ddd;
            padding: 20px;
            box-sizing: border-box;
        }


    </style>
</head>
<body>
    <section>
        <div class="movies">
            <?php
            foreach ($movies as $movie){
                include BASE_DIR . '/views/movie/_partials/movie_list_item.php';
//
            }
            ?>
        </div>
    </section>

</body>
</html>