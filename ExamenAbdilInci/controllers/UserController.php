<?php

require_once 'models/UserModel.php';

class UserController {

    private static $views_path = 'views/User/';

    public function index() {
        // voorlopig nog niets...
    }

    public function login() {
        if(isset($_POST['email']) && isset($_POST['password'])){
            $user = User::login( $_POST['email'], $_POST['password']);
            if($user !== false) {
                $_SESSION['user_id'] = $user->user_id;
                header('location: ' . URI);
            } 
        }

        include self::$views_path . 'login.php';
    }

    public function register() {
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'] ?? 'John';
            $lastname = $_POST['lastname'] ?? 'Doe';

            $user_id = User::register( $firstname, $lastname, $email, $password );
            if($user !== false) {
                $_SESSION['user_id'] = $user_id;
                header('location: ' . URI);
            } else {
                echo 'Er is iets foutgelopen';
            }
        }

        include self::$views_path . 'register.php';
    }

    public function logout() {
        session_destroy();
        header('location: ' . URI );
        die();
    }

}