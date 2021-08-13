<?php
    require 'app.php';

    // chech if there is a login post ?
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password_from_form = $_POST['password'];

        $sql = 'SELECT * FROM `user` WHERE `email` = :email';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':email' => $email ] );
        $user = $pdo_statement->fetchObject();

        // check password and email fom db
        if($user && $user->password == $password_from_form){
            $_SESSION['user_id'] = $user->user_id;
            header('location: index.php');
//            echo 'jaaaat zenne we zen binne';
        } else {
             echo ' email of wachtwoord ni just';
        }
    }


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php" class="brand">Teams</a>

    </header>

   <section>
       <form method="POST">
           <label for="">email <input type="text" name="email"></label>
           <label for="">password <input type="text" name="password"></label>
           <button type="submit">login</button>
       </form>
   </section>

</body>
</html>