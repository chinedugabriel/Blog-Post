<?php

class Post{
    private $conn;

    private $table = 'post';

    private $postTitle;
    private $postDescription;
    private $postImg;
    private $postSliderStatus;
    private $postStatus;
    private $categoriesId;
    private $adminUserId;
    private $commentId;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    
    // sanitize inputs
    private function validateInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // create Post 
    public function create(){
        $query = 'INSERT INTO '.$this->table.' (post_title, post_description, post_img, post_slider_status, post_status, categories_id, admin_user_id, comment_id) VALUES( :post_title, :post_description, :post_img, :post_slider_status, :post_status, :categories_id, :admin_user_id, :comment_id) ';

        $stmt = $this->conn->prepare($query);

        // sanitize inputs
        $this->postTitle = $this->validateInput($this->postTitle);
        $this->postDescription = $this->validateInput($this->postDescription);
        $this->postImg = $this->validateInput($this->postImg);
        $this->postSliderStatus = $this->validateInput($this->postSliderStatus);
        $this->postStatus = $this->validateInput($this->postStatus);
        $this->categoriesId = $this->validateInput($this->categoriesId);
        $this->adminUserId = $this->validateInput($this->adminUserId);
        $this->commentId = $this->validateInput($this->commentId);
    

        // Bind Data
        $stmt->bindParam(':post_title',$this->postTitle);
        $stmt->bindParam(':post_description',$this->postDescription);
        $stmt->bindParam(':post_img',$this->postImg);
        $stmt->bindParam(':post_slider_status',$this->postSliderStatus);
        $stmt->bindParam(':post_status',$this->postStatus);
        $stmt->bindParam(':categories_id',$this->categoriesId);
        $stmt->bindParam(':admin_user_id',$this->adminUserId);
        $stmt->bindParam(':comment_id',$this->commentId);

        if($stmt->execute()){
            return true;
        }

        printf("Error: %s. \n", $stmt->error);
        return false;

    }



}




?>