<?php

include 'models/MovieModel.php';
include 'models/ScheduleModel.php';
include 'models/OrderModel.php';

class MovieController{
    function index(){
        echo "index list of movie";

        $movies = Movie::getAll();

        include 'views/movie/list.php';
    }

    function detail($id = 0){
        echo "detail page zot eh " . $id ;

        $movie = Movie::getById( $id );

        $schedule = Schedule::getAllMovieId($id);

        include 'views/movie/detail.php';
    }

    function schedule($id = 0){

        $schedule = Schedule::getById($id);
        $movie = Movie::getById( $schedule->movie_id );

        include 'views/movie/schedule.php';
    }

    function order(){
        if ( !empty($_POST['email']) && isset($_POST['seats'])){

            $data = [];

            $data['firstname'] = $_POST['firstname'] ?? '';
            $data['lastname'] = $_POST['lastname'] ?? '';
            $data['email'] = $_POST['email'];
            $data['seats'] = $_POST['seats'];

            var_dump($data);


            $order_id = Order::save( $data );

            if ($order_id){
                echo 'jaat zenne u bonneken is binne, u ticketnummerken is #' . $order_id;
            } else {
                echo 'aiaiaiaia da ziet er niet goed u vriendschap, bestelling mislukt';
            }
        } else {
            $er_message = 'Niet alle gegevens werden in gevult';
        }

        if(!empty($er_message)){
            echo $er_message;
        }
    }
}
