<?php

class Vaccin {
    public static function getAll() {
        global $db;

        $sql = 'select * from center
        inner join vaccin on center.center_id = vaccin.center_id
        group by name
        having count(*) > 0';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute();
        return $sql_statement->fetchAll();
    }

    public static function getById($id) {
        global $db;

        $sql = 'select * from center 
                inner join vaccin 
                on center.center_id = vaccin.center_id 
                where center.center_id = :center_id and status=0';

        $pdo_statement = $db->prepare($sql);
        $pdo_statement->execute( [ ':center_id' => $id ] );
        return $pdo_statement->fetchAll();
    }

    public static function countVaccins($id) {
        global $db;

        $sql = 'SELECT COUNT(*) FROM vaccin
                WHERE center_id = :center_id
                AND status = 0';

        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':center_id' => $id,
        ]);

        return $sql_statement->fetchColumn();
    }

    public static function getVaccin() {
        global $db;

        $sql = 'select * from vaccin
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

    public function updateInstructions($center_id, $instructions_center_id) {
        global $db;

        $sql = 'update center set instructions=:instructions_center where center_id=:center_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
            [
                ':instructions_center' => $instructions_center_id,
                ':center_id' => $center_id,
            ]
        );

        return false;
    }

    public function save($claimer, $email, $phone, $center_id ) {
        global $db;

        print_r($center_id);

        $sql = 'UPDATE vaccin SET claimer = :claimer , email = :email, phone = :phone, status = :status
                WHERE status = 0 AND center_id = :center_id
                order by vaccin_id limit 1';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':claimer' => $claimer,
            ':email' =>  $email,
            ':phone' => $phone,
            ':status' => 1,
            ':center_id' => $center_id,
        ]);

        return false;
    }
}

?>