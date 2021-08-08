
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Oefening op arrays</h1>
    <h2>Festival name generator </h2>

    <?php
        require 'data.php';

        $prefix_cnt = count($prefix);
        $suffix_cnt = count($suffix);

        do{
            $newFestival= $prefix[rand(0, $prefix_cnt-1)] . $suffix[rand(0, $suffix_cnt-1)];
        } while(in_array($newFestival, $unavailable));


       echo $newFestival



    ?>
</body>
</html>