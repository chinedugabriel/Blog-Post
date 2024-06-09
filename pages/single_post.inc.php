<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="blog.css">
    <!-- bootstrap link start here 
    * Bootstrap v5.3.0-alpha3 
    -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="./src/img/favicon.ico" type="image/x-icon">
</head>
<body class=" ">
 <?php
    include_once "./include/user_menu.inc.php";
 ?>

    <section class="mt-lg-3 pb-3">
        <div class="container-lg">
            <div class="row ">
                <div class="col-lg-9">
                

                    <div class="row my-4  text-primary border-bottom border-primary border-2">
                        <div class="col-sm-12 p-lg-0">
                            <p class="h4">Latest News</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- main news content goes here -->
                            <div class="row">
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
                            </div>
                            <div class="row my-3">
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 offset-md-1 text-primary d-none d-lg-flex flex-column position-relative " id="more-news">
                    <!-- category goes here -->
                    <?php include_once "./include/category_menu.inc.php" ; ?>

                </div>
            </div>

        </div>
    </section>


<script src="./bootstrap/js/bootstrap.js"></script>
</body>
</html>