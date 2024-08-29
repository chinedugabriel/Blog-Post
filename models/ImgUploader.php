<?php
// This class handles image uploads to the uploads file, the we save the file path to the sql database

class ImgUploader {

    private $target_dir = "uploads/";

    public function upload($file) {
        $target_file = $this->target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($file["tmp_name"]);
        if($check === false) {
            return false;
        }

        // Check file size
        if ($file["size"] > 500000) {
            return false;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            return false;
        }

        // Move uploaded file to the target directory
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            return false;
        }
    }
    
}



?>