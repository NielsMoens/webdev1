<?php

require_once 'models/UserModel.php';

class UserController{

    private static $views_path = 'views/User/';

    public function index(){
        echo "index";

    }

    public function login() {

        include self::$views_path . 'login.php';
    }
    function register(){
        echo "register page page zot eh " ;

        //sql here

        $result=[];

        return $result;
    }

}