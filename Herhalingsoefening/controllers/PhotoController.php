<?php

require_once 'models/photoModel.php';


class PhotoController {

    public function index() {

        if(isset($_POST['search_string'])){
            $photos = Photo::getAll($_POST['search_string']);
        } else {
            $photos = Photo::getAll('');

        }
        include 'views/photo/photos.php';

    }

    public function myPhotos() {

        $photos = Photo::getUserPhotos();

        include 'views/photo/photos.php';

    }
    public function upload() {


        if(isset($_POST['title']) && isset($_FILES['my_image'])){

            $img_title = $_POST['title'];
            $img_name = $_FILES['my_image']['name'];
            $img_size = $_FILES['my_image']['size'];
            $tmp_name = $_FILES['my_image']['tmp_name'];
            $error = $_FILES['my_image']['error'];

            if ($error === 0) {
                // check what of file it is
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                print_r($img_ex);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    //insert with a unique file name
                    $new_img_name = uniqid("", false). '.'.$img_ex_lc;
                    $img_upload_path = 'images/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    $uploaded_photo = Photo::uploadPhoto($img_title, $new_img_name);

                } else {
                   echo "You can't upload files of this type";
                }
            } else {
                echo "DAS HIER NI JUST EH VRIEND!";
            }
        } else {
            echo 'nothing uploaded';
        }
        include 'views/photo/upload.php';
    }

}






?>