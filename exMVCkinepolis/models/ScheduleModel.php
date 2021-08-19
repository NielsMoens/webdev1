<?php
class Schedule{
    public static function getAll(){
        global $db;

        $sql = 'SELECT * FROM `schedule`';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( );
        return $pdo_statement->fetchAll();
    }

    public static function getAllMovieId( $movie_id ){
        global $db;

        $sql = 'SELECT * FROM `schedule` 
                INNER JOIN `room` ON `schedule`.`room_id` = `room`.`room_id`
                WHERE `movie_id` = :movie_id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [':movie_id' => $movie_id]);
        return $pdo_statement->fetchAll();
    }

    public static function getById( $id ){
        global $db;

        $sql = 'SELECT * FROM `schedule` 
                INNER JOIN `room` ON `schedule`.`room_id` = `room`.`room_id`
                WHERE `schedule_id` = :schedule_id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [':schedule_id' => $id]);
        return $pdo_statement->fetchObject();
    }

    public static function getOrderedSeatsById( $id ){
        global $db;

        $sql = 'SELECT seat FROM `order_detail`
                WHERE `schedule_id` = :schedule_id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [':schedule_id' => $id]);
        return $pdo_statement->fetchAll(PDO::FETCH_COLUMN, 0);
    }
}