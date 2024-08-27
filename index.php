<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime News</title>
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
                    <!-- Carousel Starts here -->
                    <div class="row">
                        <div class="col-sm-12 p-0">
                            <div id="carouselExampleDark" class="carousel slide" > <!-- data-bs-rid
                                e="carousel" -->
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active " data-bs-interval="10000">
                                        <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="d-block w-100 " alt="...">
                                        <div class="carousel-caption  d-sm-flex flex-column position-absolute top-50 start-50 translate-middle  align-items-center justify-content-center overlay">
                                            <h5>First slide label</h5>
                                            <p>Some representative placeholder content for the first slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="https://img.freepik.com/free-photo/journalist-taking-interview-from-man_23-2149029312.jpg?t=st=1717540091~exp=1717543691~hmac=63d8f3a21ee97a7fda9590ff35be48d94875a69cc0e269918cd0bdafcc5b3e59&w=1380" class="d-block w-100" alt="...">
                                        <div class="carousel-caption  d-sm-flex flex-column position-absolute top-50 start-50 translate-middle  align-items-center justify-content-center overlay">
                                            <h5>Second slide label</h5>
                                            <p>Some representative placeholder content for the second slide.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item" data-bs-interval="3000">
                                        <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="d-block w-100" alt="...">
                                        <div class="carousel-caption  d-sm-flex flex-column position-absolute top-50 start-50 translate-middle pt-4 align-items-center justify-content-center overlay">
                                            <h5>Third slide label</h5>
                                            <p>Some representative placeholder content for the third slide.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

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
                <!-- Carousel ends here -->

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