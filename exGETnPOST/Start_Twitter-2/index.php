<?php
    require 'includes/db.php';

    $search_string = $_GET['search_string'] ?? '';
    //    print_r($search_string);

    $sql='SELECT *
            FROM `message`
            INNER JOIN `users` ON `message`.`user_id` = `users`.`user_id`
            WHERE `message` LIKE :search_string  
            ORDER BY `created_on` DESC 
            LIMIT 25';

    $sql_statement = $db->prepare($sql);
    $sql_statement->execute(
            [
                    ':search_string' => '%' . $search_string . '%'
            ]
    );
    $messages = $sql_statement->fetchAll();

//    print_r($messages);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PGM Tweets</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="messages">
        <form>
            <div class="message message-new">
            
                <div class="avatar">JD</div>

                <div class="content">
                    <textarea name="tweet"></textarea>
                    <button type="submit">Tweet</button>
                </div>
            </div>
        </form>

        <form>
            <div class="search">
                <div class="content">
                    <input value="<?= $search_string; ?>" name="search_string" placeholder=' '>
                    <button type="submit">Zoeken</button>
                </div>
            </div>
        </form>

        <?php
            foreach ($messages as $item) {
                include "views/message.php";
//                print_r($item);
            }
        ?>
    </div>

</div>


</body>
</html>