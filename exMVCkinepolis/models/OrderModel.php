<?php
class Order{
    public static function save($data){
        global $db;

        $data['date']= date('Y-m-d H:i:s');

        $sql = "INSERT INTO `order`(firstname, lastname, email, date) VALUES (:firstname, :lastname, :email, :date)";
        $stmnt = $db->prepare($sql);
        $stmnt->execute($data);

        return $db->lastInsertId();

    }
}