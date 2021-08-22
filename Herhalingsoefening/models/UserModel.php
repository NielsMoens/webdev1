<?php

class User  {

    public static function getById( $id ) {
        global $db;

        $sql = 'SELECT * FROM `user` WHERE `user_id` = :id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':id' => $id ] );
        return $pdo_statement->fetchObject();
    }
    
    public static function getByEmail( $email ) {
        global $db;

        $sql = 'SELECT * FROM `user` WHERE `email` = :email';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':email' => $email ] );
        return $pdo_statement->fetchObject();
    }

    public static function login( $email, $password ) {
        $user =  self::getByEmail($email);

//        if($user && $password === $user->password ) {
         if($user && password_verify($password, $user->password) ) {

            return $user;
        } 

        return false;
    }

    public static function register($firstname, $lastname, $email, $password) {
        global $db;
        $sql = 'SELECT COUNT(*) AS "total" FROM `user` WHERE `email` = :email';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':email' => $email ] );
        $total =  $pdo_statement->fetchColumn();

        if( $total == 0) {

            $sql = 'INSERT INTO `user` 
                    (firstname, lastname, email, password, creation_date) VALUES 
                    (:firstname, :lastname, :email, :password, :creation_date);';
            $stmnt = $db->prepare($sql);
            $stmnt->execute([
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':email' => $email,
                ':password' => password_hash( $password, PASSWORD_DEFAULT ),
                ':creation_date' => date("Y-m-d H:i:s"),
            ]);

            $user_id = $db->lastInsertId();
            if($user_id) {
                return $user_id;
            } 
        } 

        return false;
    }
    

}