<?php

require_once 'models/photoModel.php';

class PhotoController
{

    public function index()
    {

        if (isset($_POST['search_string'])) {
            $photos = Photo::getAll($_POST['search_string']);
        } else {
            $photos = Photo::getAll('');
        }


        include 'views/photo/photos.php';

    }

    public function upload()
    {

        include 'views/photo/upload.php';

    }

    public function myPhotos()
    {

        $photos = Photo::getUserPhotos();

        include 'views/photo/photos.php';

    }

}






