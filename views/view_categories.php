<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper( $_GET['category']); ?></title>
    <link rel="stylesheet" href="blog.css">
    <!-- bootstrap link start here 
    * Bootstrap v5.3.0-alpha3 
    -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="../src/img/favicon.ico" type="image/x-icon">
</head>
<body class=" ">
 <?php
//  This veriable is used to provide the right menu which would display the correct logo

    $menuDynamic = "true";
    include_once "../include/user_menu.inc.php";

    
// if(empty($_GET['id'])){
//     header("location: http://localhost/php_projects/Blog-Post/");
    
// }else{
    // link to the post model class
    include '../models/Post.php';

$categoryPost = new Post();

$getPost = $categoryPost->relatedPost($_GET['category'],'all');//($_GET['id']);


// }


    
 ?>

<section class="mt-lg-4 pb-3">
        <div class="container d-flex flex-column gap-5">
            <div class="row text-primary border-bottom border-primary border-2">
                <div class="col-sm-12 p-lg-0">
                    <!-- Category Title -->
                    <p class="h4">
                        <!-- Latest News -->
                        <?php echo ucfirst( $_GET['category']); ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="row ">
                        <div class="col-sm-12">
                            <!-- main news content goes here -->

                            <?php
                                foreach($getPost as $key=>$row):
                            ?>

                            <div class="row mb-5 bg-light rounded p-3 p-md-5">
                                <div class="col-md-12">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 p-lg-0">
                                            <p class="h3">
                                            <!-- How to Get Glass Skin, According to K-beauty Experts -->
                                             <?php 
                                                echo ucwords($row['post_title']); 
                                              ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0 text-white">
                                            <p>
                                                <span class="bg-primary p-2">
                                                    BY KIANA MURDEN
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0 text-secondary">
                                            <p>
                                                <!-- April 24, 2024 -->
                                                <?php
                                                    echo $row['post_date'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0 ">
                                            <img src="<?php echo $row['post_image']; ?>" alt="blog_post_image" class="img-thumbnail w-100 " >
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mt-sm-2 p-lg-0">
                                            <p>
                                                <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quaerat architecto voluptatibus excepturi doloribus nulla? At delectus placeat sunt labore inventore.  -->
                                                 <?php
                                                    echo $row['post_description'];
                                                 ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-sm-3">
                                        <div class="col-sm-12 p-lg-0">
                                            <a href="http://localhost/php_projects/Blog-Post/views/single_post?id=<?php echo $row['post_id'] ;?>" class="btn btn-primary rounded-5">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                             endforeach;
                             ?>


                            <!-- blog post template starts here -->
                            <!-- <div class="row my-3">
                                <div class="col-md-12">
                                    <div class="row mb-2">
                                        <div class="col-sm-12 p-lg-0">
                                            <p class="h3">
                                            How to Get Glass Skin, According to K-beauty Experts
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0 text-white">
                                            <p>
                                                <span class="bg-primary p-2">
                                                    BY KIANA MURDEN
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0 text-secondary">
                                            <p>
                                                April 24, 2024
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 p-lg-0">
                                            <img src="https://img.freepik.com/free-photo/low-angle-underground-hip-hop-musicians_23-2150932959.jpg?t=st=1717554098~exp=1717557698~hmac=bc3e6cefc413c1bd4335d57b58471e9fb87d0c9a83e048b61ac42bd60b4712ba&w=1380" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 mt-sm-2 p-lg-0">
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quaerat architecto voluptatibus excepturi doloribus nulla? At delectus placeat sunt labore inventore. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mb-sm-3">
                                        <div class="col-sm-12 p-lg-0">
                                            <button class="btn btn-outline-primary rounded-5" >
                                                View More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- blog post template starts here -->

                        </div>
                    </div>
                </div>


                <div class="col-md-2 offset-md-1 text-primary position-relative" id="more-news">
                    <!-- category goes here -->
                     <div class="position-sticky top-0">
                         <?php include_once "../include/category_menu.inc.php" ; ?>
                     </div>

                </div>
            </div>

        </div>
    </section>




<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>