<?php

require_once 'models/ProjectModel.php';
class ProjectController{
    function index(){
        echo "index list of projects";

        // db object inladen
        //sql inladen

        $result=[];

        return $result;
    }
    function detail($id = 0){
        echo " detail page zot eh " . $id ;

        //sql here

        $result=[];

        return $result;
    }

}