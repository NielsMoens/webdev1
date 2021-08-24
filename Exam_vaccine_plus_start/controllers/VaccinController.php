<?php
//
require_once 'models/VaccinModel.php';
//require_once 'models/OrderModel.php';


class VaccinController {
    public function index() {

        $vaccins = Vaccin::getAll();
        $total1 = Vaccin::countVaccins(1);
        $total2 = Vaccin::countVaccins(2);
        $total3 = Vaccin::countVaccins(3);

        include 'views/vaccin/vaccin_list.php';
    }


    public function admin() {

        $admin_vaccin = Vaccin::getVaccin();

        include 'views/vaccin/admin.php';
    }

    public function instructions() {
        $centers = Vaccin::getAll();

        if(isset($_FILES['my_image'])){
            $img_center_id = $_POST['center_id'];
            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];

            if ($error === 0) {
                // check what of file it is
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                print_r($img_ex);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("pdf");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    //insert with a unique file name
                    $new_img_name = uniqid("", false). '.'.$img_ex_lc;
                    $img_upload_path = 'instructions/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
//                    $uploaded_photo = Photo::uploadPhoto($img_title, $new_img_name);
                    $updateCenter = Vaccin::updateInstructions($img_center_id, $new_img_name );
                } else {
                    echo "You can't upload files of this type";
                }
            } else {
                echo "DAS HIER NI JUST EH VRIEND!";
            }
        } else {
            echo 'nothing uploaded';
        }

        include 'views/vaccin/instructions.php';


    }



    public function detail($id) {

        $vaccin = Vaccin::getById( $id );

        include 'views/vaccin/detail.php';
    }



    public function order($id) {
        print_r($id);
        $center_id = $id;
        include 'views/vaccin/order.php';

        if(!empty($_POST['email'])){

            $data = [];

            $data['claimer'] = $_POST['claimer'] ?? '';
            $data['email'] = $_POST['email'] ?? '';
            $data['phone'] = $_POST['phone'];


//            print_r($_POST['claimer'] . $_POST['email'] . $_POST['phone'] . $id);


            $order_id = Vaccin::save($data['claimer'], $data['email'], $data['phone'], $id );

            header('location: ' . URI);
            if($order_id !== false) {
                header('location: ' . URI);
            } else {
                $error_message = "er is iets foutgelopen";
            }
        }

    }

    public function claimed() {
        include 'views/vaccin/claimed.php';
    }

}