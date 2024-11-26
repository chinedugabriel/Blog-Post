<?php

require_once "../config/Database.php";
// include "../config/Database.php";
require "ImgUploader.php";

// echo "it works";

class Post extends Database{
    // protected $conn = $this->dbConnect();

    private $table = 'post';

    public $postTitle;
    public $postDescription;
    public $postImg;
    public $postSliderStatus;
    public $postStatus;
    public $postCategories;
    public $adminUserId;
    // public $commentId;

    // public $stmt;
    
    // sanitize inputs
    private function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);

        return $data;
    }

    // create Post 
    public function createPost(){
        // $result;
        // sanitize inputs
        $this->postTitle = $this->validateInput( $_POST['postInputTitle']);

        $this->postDescription = $this->validateInput($_POST['postInputDescription']);

        // this will upload the image
        if($_FILES['imageInput']['size'] > 1){
            $imageUploader = new ImgUploader();
            $imagePath = $imageUploader->upload($_FILES['imageInput']);
        }else{
            $imagePath = 'null';
        }

        $this->postImg = $imagePath;

        // $postInSlider = 'hide';
        if (isset($_POST['postInputSliderStatus'])){
            $postInSlider = $this->validateInput($_POST['postInputSliderStatus']);
        }else{
            $postInSlider = 'hide';
        }
        $this->postSliderStatus = $postInSlider ;

        $this->postStatus = $this->validateInput($_POST['postInputStatus']);

        $this->postCategories = $this->validateInput($_POST['categoriesInput']);

        $this->adminUserId = 1;
        // $this->adminUserId = $this->validateInput($this->adminUserId);

        // $this->commentId = $this->validateInput($this->commentId);



        // create a prepared statement before sending to the database

        $stmt =$this->conn->prepare ("INSERT INTO $this->table (post_title, post_description, post_image, post_slider_status, post_status, post_categories, admin_user_id) VALUES( :postTitle, :postDescription, :postImg, :postSliderStatus, :postStatus, :postCategories, :adminUserId) ");

        $stmt->bindParam(':postTitle',$this->postTitle);
        $stmt->bindParam(':postDescription',$this->postDescription);
        $stmt->bindParam(':postImg',$this->postImg);
        $stmt->bindParam(':postSliderStatus',$this->postSliderStatus);
        $stmt->bindParam(':postStatus',$this->postStatus);
        $stmt->bindParam(':postCategories',$this->postCategories);
        $stmt->bindParam(':adminUserId',$this->adminUserId);


        if($stmt->execute()){
            echo 'successfully added post to the database';

            // header("Location: http://localhost/php_projects/Blog-Post/views/add_post");


        }
   
        
    

    }



}




?>