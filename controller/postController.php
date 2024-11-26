<?php
// require_once "../config/Database.php";
// require_once "../models/imgUploader.php";

include  "../models/Post.php";

// $database = new Database();
// $db_connect = $database->dbConnect();
$post = new Post();




if (isset($_POST['submitPost'])){
    
    $post->createPost();

}



?>