<?php
class Movie{
    public static function getAll(){
        global $db;

        $sql = 'SELECT * FROM `movie`';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( );
        return $pdo_statement->fetchAll();
    }

    public static function getById( $id ){
        global $db;

        $sql = 'SELECT * FROM `movie` WHERE `movie_id` = :movie_id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [':movie_id' => $id]);
        return $pdo_statement->fetchObject();
    }
}