<?php

include "C:\wamp64\www\php_projects\Blog-Post\config\Database.php";
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

    // read slider post
    public function sliderPost(){
        $stmt = $this->conn->query("SELECT * FROM post WHERE post_slider_status = 'show'");
        
        $result = $stmt->fetchAll();

        return $result;

    }

    // read single post from database ***
    public function viewSinglePost($id){
        $stmt = $this->conn->query("SELECT * FROM post WHERE post_id = '$id'");
        
        $result = $stmt->fetchAll();

        return $result;

    }

    // related post from database ***
    public function relatedPost($categories, $number){
        // below i added a conditional statement so as to chose between getting all the records in a given category or just latest top 4 records that would be used to show related post in the single post page
        if($number == 'all'){
            $stmt = $this->conn->query("SELECT * FROM post WHERE post_categories = '$categories' ORDER BY post_date ASC");
        }else{
            $stmt = $this->conn->query("SELECT * FROM post WHERE post_categories = '$categories' ORDER BY post_date ASC LIMIT 4");
        }
        
        $result = $stmt->fetchAll();

        return $result;

    }

    // read post
    public function viewPost(){
        $stmt = $this->conn->query("SELECT * FROM post ORDER BY post_date ASC");
        
        $result = $stmt->fetchAll();

        return $result;

    }

    // Edith post
    public function updatePost($postID){

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

        $stmt =$this->conn->prepare ("UPDATE $this->table SET post_title = ':postTitle', post_description = ':postDescription', post_image = ':postImg', post_slider_status = ':postSliderStatus', post_status = ':postStatus', post_categories = ':postCategories', admin_user_id = ':adminUserId' WHERE post_id = '$postID'");

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

// $readPost = new Post();

// $readPost->viewPost();


?>