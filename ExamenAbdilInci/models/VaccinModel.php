<?php

class Vaccin {

    public static function getAll() {
        global $db;

        $sql = 'select * from center
        inner join vaccin on center.center_id = vaccin.center_id
        group by name
        having count(*) > 1';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();
        return $sql_statement->fetchAll();
    }

    public static function getById($id) {
        global $db;

        $sql = 'SELECT * FROM `center` WHERE `center_id` = :center_id';
        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':center_id' => $id ] );
        return $pdo_statement->fetchObject();
    }



    public static function getVaccin() {
        global $db;

        $sql = 'select * from vaccin
        group by vaccin_id
        having count(*) = 1
        order by vaccin_id desc ';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();
        return $sql_statement->fetchAll();

    }

    
    public function getAllByCenterId($center_id) {
        global $db;

        $sql = 'SELECT * FROM vaccin
        INNER JOIN center ON vaccin.center_id = center.center_id
        WHERE `center_id` = :center_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
            [
                ':center_id' => $center_id
            ]
        );
        return $sql_statement->fetchAll();

    }


}

?>