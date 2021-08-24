<?php

require_once 'models/VaccinModel.php';
require_once 'models/OrderModel.php';


class VaccinController {
    public function index() {

        $vaccins = Vaccin::getAll();

        include 'views/vaccin/vaccin_list.php';
    }


    public function admin() {

        $admin_vaccin = Vaccin::getVaccin();

        include 'views/vaccin/admin.php';
    }

    public function instructions() {
        include 'views/vaccin/instructions.php';
    }

    public function detail($id) {
        print_r($id);
        $vaccin = Vaccin::getById( $id );
    
//         $order = Order::getAllByCenterId($id);

        include 'views/vaccin/detail.php';
    }

    public function order() {

        include 'views/vaccin/order.php';

        if(!empty($_POST['email'])){

            $data = [];
    
            $data['claimer'] = $_POST['claimer'] ?? '';
            $data['email'] = $_POST['email'] ?? '';
            $data['phone'] = $_POST['phone'];
    
            $order_id = Order::save($data);
    
            if($order_id) {
                include 'views/vaccin/claimed.php';
            } else {
                $error_message = "er is iets foutgelopen";
            }
        }     
            if(!empty($error_message)){
            echo $error_message;
            }

        }

    public function claimed() {
        include 'views/vaccin/claimed.php';
    }

}
?>