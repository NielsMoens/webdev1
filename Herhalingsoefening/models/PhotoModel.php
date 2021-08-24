<?php

class Photo {
    public static function getAll($search_string) {
        global $db;
        $sql = 'SELECT `photo`.*, `user`.`firstname`, `user`.`lastname`
        FROM `photo`
        INNER JOIN `user` ON `user`.`user_id` = `photo`.`user_id`
        INNER JOIN `favorite` ON `photo`.`photo_id` = `favorite`.`photo_id`
        WHERE `photo`.`title` LIKE :search_string
        GROUP BY `photo`.`photo_id`';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
            [
                ":search_string" => '%' . $search_string . '%'
            ]
        );
        return $sql_statement->fetchAll();
    }

    public static function getUserPhotos() {
        global $db;
        global $current_user_id;

        $sql = 'SELECT `photo`.*, `user`.`firstname`, `user`.`lastname`, COUNT(`favorite`.`photo_id`) as `likes`
        FROM `photo`
        INNER JOIN `user` ON `user`.`user_id` = `photo`.`user_id`
        INNER JOIN `favorite` ON `photo`.`photo_id` = `favorite`.`photo_id`
        WHERE `photo`.`user_id` = :user_id
        GROUP BY `photo`.`photo_id`';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute(
            [
                ":user_id" => $current_user_id
            ]
        );
        return $sql_statement->fetchAll();
    }
    public static function uploadPhoto( $title, $src) {
        global $db;
        global $current_user_id;

            $sql = 'INSERT INTO `photo` 
                    ( user_id, title, src, upload_date) VALUES 
                    (:user_id, :title, :src, :upload_date);';
            $stmnt = $db->prepare($sql);
            $stmnt->execute([
                ':user_id' => $current_user_id,
                ':title' => $title,
                ':src' => $src,
                ':upload_date' => date("Y-m-d H:i:s"),
            ]);

            $photo_id = ($db->lastInsertId());

        $sql_photo = 'INSERT INTO `favorite`
                    ( photo_id, user_id) VALUES
                    (:photo_id, :user_id);';
        $sql_statement = $db->prepare($sql_photo);
        $sql_statement->execute([
            ':photo_id' =>  $photo_id,
            ':user_id' => $current_user_id,
        ]);


        return false;
    }


}


?>