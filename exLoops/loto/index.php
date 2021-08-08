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
    <h1>oefening op while</h1>
    <h2>Lotto trekking</h2>

    <?php
        $lottotrekking=[];
       while (count($lottotrekking) < 6){
            $new=rand(1,45);
            if( !in_array($new, $lottotrekking)){
                $lottotrekking[]=$new;
            }
        }
        print_r($lottotrekking);
    ?>

    <div class="trekking">
        <?php
            foreach ($lottotrekking as $key=> $value){
                echo ' <div class="nummer"> '.$value .'</div>';
            }
        ?>


        <div class="nummer"> <?= $lottotrekking[0]; ?></div>
        <div class="nummer"> <?= $lottotrekking[1]; ?></div>
        <div class="nummer"> <?= $lottotrekking[2]; ?></div>
        <div class="nummer"> <?= $lottotrekking[3]; ?></div>
        <div class="nummer"> <?= $lottotrekking[4]; ?></div>
        <div class="nummer"> <?= $lottotrekking[5]; ?></div>
    </div>
</body>
</html>