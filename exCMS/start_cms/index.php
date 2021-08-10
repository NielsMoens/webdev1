<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <h1>My website</h1>
    <?php
        require 'includes/db.php';

        $sql = 'select `page_id`, `name`, `slug` from pages order by `sort_order`';

        $pdo_statement = $db->prepare($sql);
        $pdo_statement-> execute();
        $all_pages = $pdo_statement->fetchAll();

        // navigation
        echo '<nav>';
        foreach ($all_pages as $page){
            echo '<a href="index.php?page_id=' . $page['page_id'] . '">' .  $page['name'] . '</a>';

        }
        echo '</nav>';

        //Ophalen huidige pagina
        $current_page_id = $_GET['page_id'];

        $sql='select * from `pages` where `page_id`= :page_id' ;
        $pdo_statement = $db->prepare($sql);
        $pdo_statement-> execute(
                [':page_id' => $current_page_id]
        );

        //fetch an object instead of an array
        $current_pages = $pdo_statement->fetchObject();

        //fyi: use -> to address things in an object
//        print_r($current_pages->content);

    ?>

    <h1><?= $current_pages->title;?></h1>
    <div class="content">
        <?= $current_pages->content; ?>
    </div>

</div>
</body>
</html>