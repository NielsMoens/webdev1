<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css"
</head>
<body>
    <h1>Oef PHP</h1>
    <div class="card">
        <h2>Rainbow</h2>
        <div class="rainbow">
            <?php
            for ($hue=1 ; $hue<=360 ; $hue++ ){
                echo '<div class="block" style="background-color: hsl(' . $hue . ', 100%, 50%)"></div>';
            }
            ?>
        </div>
    </div>
    <div class="card">
        <h2>color array</h2>
        <div class="array">
            <?php
                $color = [1=>'red', 120=>'green', 240=>'blue'];
                foreach ($color as $key => $value){
                    echo '<div class="block" style="background-color: '. $value .'">' . $value . '</div>';
                }
            ?>
        </div>
    </div>

</body>
</html>