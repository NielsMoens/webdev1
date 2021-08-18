<?php
 include 'models/MovieModel.php';

class MovieController{
    function index(){
        echo "index list of movie";

        $movies = Movie::getAll();

        include 'views/movie/list.php';
    }
    function detail($id = 0){
        echo "detail page zot eh " . $id ;

        $movie = Movie::getById( $id );

        include 'views/movie/detail.php';
    }
}
