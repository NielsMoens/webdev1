<?php
class Order{
    public static function save($data){
        global $db;

        $order_data = [];
        $order_data['firstname']= date('firstname');
        $order_data['lastname']= date('lastname');
        $order_data['email']= date('email');
        $order_data['date']= date('Y-m-d H:i:s');

        $sql = "INSERT INTO `order`(firstname, lastname, email, date) VALUES (:firstname, :lastname, :email, :date)";
        $stmnt = $db->prepare($sql);
        $stmnt->execute($order_data);
        $order_id = $db->lastInsertId();

        $sql = "INSERT INTO `order_detail`(order_id, schedule_id, seat) VALUES (:order_id, :schedule_id, :seat)";
        $stmnt = $db->prepare($sql);

        foreach ($data['seats'] as $seat ){
            $stmnt->execute([
                ':order_id'=>$order_id,
                ':schedule_id'=>$data['schedule_id'],
                ':seat'=> $seat
            ]);
        }

        return $order_id ;

    }
}