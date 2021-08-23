<?php

class Order {

    public static function save($data) {
        global $db;

        $data['date'] = date('Y-m-d H:i:s');

        $sql = 'INSERT INTO `vaccin` (`claimer`,`email`,`phone`, `date`) 
                VALUES (:claimer, :email, :phone, :date)';
        $stmnt = $db->prepare($sql);
        $stmnt->execute($data);

        return $db->lastInsertId();

    }
}

?>