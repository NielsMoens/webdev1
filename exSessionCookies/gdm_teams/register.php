<?php
    require 'app.php';

    // chech if there is a login post ?
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'] ?? 'little';
        $lastname = $_POST['lastname'] ?? 'shit';


        $sql = 'SELECT COUNT(*) as "total" FROM `user` WHERE `email` = :email';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':email' => $email ] );
        $total = $pdo_statement->fetchColumn();

        if($total == 0){
            $sql = 'INSERT INTO `user`
                (firstname, lastname, email, password, creation_date) VALUES 
                (:firstname, :lastname, :email, :password, :creation_date)';
            $stmnt = $db->prepare($sql);
            $stmnt->execute(
                [
                    ':firstname'=> $firstname,
                    ':lastname'=> $lastname,
                    ':email'=>$email,
                    ':password'=>password_hash($password, PASSWORD_DEFAULT),
                    ':creation_date'=>date("Y-m-d H:i:s"),
                ]
            );
            $user_id =$db->lastInsertId();
            if($user_id){
                $_SESSION['user_id'] = $user_id;
                header('location: index.php');
            } else{
                echo 'aiaiaiaiia der is iet mis gelopen';
            }
        } else {
            echo 'email already exists';
        }
    }
?>
<!DOCTYPE html>
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
           <label for="">firstname <input type="text" name="firstname"></label>
           <label for="">lastname <input type="text" name="lastname"></label>
           <label for="">email <input type="email" name="email" required></label>
           <label for="">password <input type="password" name="password"></label>
           <button type="submit">Save</button>
       </form>
   </section>

</body>
</html>