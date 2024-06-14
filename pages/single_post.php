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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="../src/img/favicon.ico" type="image/x-icon">
</head>
<body class=" ">
 <?php
//  This veriable is used to provide the right menu which would display the correct logo
    $menuDynamic = "single_post";
    include_once "../include/user_menu.inc.php";
    
 ?>

    <section class="mt-lg-3 pb-3">
        <div class="container-lg">
            <div class="row my-3">
                <div class="col-sm-12 px-lg-0">
                    <button class="btn btn-outline-primary rounded-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                    </svg>
                        Back
                    </button>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-9">
                    <!-- content starts here -->

                    <div class="row mt-2 mb-4 text-primary border-bottom border-primary border-2">
                        <div class="col-sm-12 p-lg-0">
                            <p class="h4">
                                <!-- Title of the post goes here from the database -->
                                Latest News
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 p-lg-0">
                            <!-- post image goes here -->
                            <img src="https://img.freepik.com/free-photo/low-angle-underground-hip-hop-musicians_23-2150932959.jpg?t=st=1717554098~exp=1717557698~hmac=bc3e6cefc413c1bd4335d57b58471e9fb87d0c9a83e048b61ac42bd60b4712ba&w=1380" alt="" class="img-fluid">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 px-lg-0 mt-md-3">
                            <!-- Content Goes here -->
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, temporibus beatae itaque qui esse dolor minus. Eligendi quis accusamus odio, dolores explicabo a inventore unde veritatis dolore. Nostrum voluptas dolor recusandae voluptatibus atque laboriosam molestiae repellendus deserunt placeat excepturi, quas suscipit rem similique commodi pariatur cumque ipsam illum, dolorem numquam veniam voluptatem distinctio delectus? Reprehenderit totam odit sint, voluptas, unde aperiam mollitia porro officiis optio recusandae qui, a facilis impedit libero. Magnam, rem delectus nulla, veniam et tenetur assumenda illo, corrupti nihil suscipit in a perspiciatis! Quis nemo sapiente temporibus similique aspernatur natus maiores quam at hic. Ratione quasi delectus expedita quos harum, vero accusamus dolor blanditiis aliquam optio sequi qui nulla unde? Possimus labore consequuntur consectetur doloremque, incidunt tempora aliquam eum neque quisquam eligendi harum modi numquam tempore natus, reiciendis distinctio illum molestias nemo deleniti libero. Sapiente eius alias asperiores aspernatur soluta aliquam inventore laboriosam impedit dolore eligendi neque perferendis tenetur rem excepturi ullam aperiam est eveniet cum, unde laudantium suscipit saepe quod nulla amet. Minima at temporibus omnis? Quae in debitis mollitia aspernatur iure! Architecto corporis fugit sit amet. Itaque delectus cupiditate dolores sed, fugiat voluptas reprehenderit corrupti placeat quae ut voluptatum corporis, at consectetur excepturi. Deserunt fugit nobis distinctio sed illo officia voluptatem laboriosam laborum animi, veniam consectetur et at perferendis assumenda facere! Officia nihil a, laudantium dicta asperiores tempore voluptatum ex voluptate blanditiis eius odio inventore quod corrupti modi nobis vero accusantium hic, error, sed voluptas! Ratione alias totam, rem saepe consectetur, enim, provident vero autem exercitationem adipisci corrupti minima! Doloremque similique nisi id laudantium dolor?
                            </p>
                        </div>
                    </div>

                    <!-- Related post starts here -->
                    <div class="row mt-2 mb-4 text-primary border-bottom border-primary border-2">
                        <div class="col-sm-12 p-lg-0">
                            <p class="h4">
                                <!-- Title of the post goes here from the database -->
                                Related Post
                            </p>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-12 px-lg-0">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="" class="text-decoration-none ">
                                        <div class="card ">
                                            <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" class="text-decoration-none ">
                                        <div class="card ">
                                            <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" class="text-decoration-none ">
                                        <div class="card ">
                                            <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" class="text-decoration-none ">
                                        <div class="card ">
                                            <img src="https://img.freepik.com/free-photo/full-shot-underground-hip-hop-musicians_23-2150932925.jpg?t=st=1717539566~exp=1717543166~hmac=a305e5003a38c8b1434c43f4ad32ab8131efabb532355b3427f00633f99e0644&w=1380" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Related post ends here -->
                    

                    <!-- content ends here -->
                </div>

                <div class="col-md-2 offset-md-1 text-primary d-none d-lg-flex flex-column position-relative " id="more-news">
                    <!-- category goes here -->
                    <?php include_once "../include/category_menu.inc.php" ; ?>

                </div>
            </div>

        </div>
    </section>


<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>