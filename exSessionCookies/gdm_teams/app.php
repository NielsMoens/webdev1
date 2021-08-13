<?php

session_start();

require 'config.php';

require 'libs/db.php';

$current_user_id = $_SESSION['user_id'] ?? 0;

if($current_user_id){
    $sql = 'SELECT * FROM `user` WHERE `user_id` = :user_id';
    $pdo_statement = $db->prepare($sql);
    $pdo_statement->execute( [ ':user_id' => $current_user_id ] );
    $user =  $pdo_statement->fetchObject();
}else {
    if(strpos($_SERVER['REQUEST_URI'], 'login.php') === false ){
        header('location: login.php');
    }
}

