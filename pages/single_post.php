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

    $menuDynamic = "true";
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
                    <!-- Add comments form starts here -->
                    <div class="row mb-3">
                        <div class="col-md-12 p-0">
                            <form action="" class="border px-3 py-2 d-flex flex-column gap-4" method="">
                                <p class="h3">
                                    Comment Here
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="visitors_name" id="" placeholder="Name" class="form-control" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="visitors_email" id="" placeholder="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="visitors_comment" id="" class="form-control " col="" row="" placeholder="Comment">  
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><button type="submit" class="btn btn-outline-dark">Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Add comments form ends here -->
                     <!-- comments view starts here -->
                      <div class="row border vh-50 ">
                        <div class="col-md-12">
                            <p class="border-bottom p-2 text-primary">
                                Previous Comments
                            </p>
                            <!-- comments gose here -->
                            <div class="row py-3 px-4">
                                <div class="col-md-8 d-flex flex-column gap-3">
                                    <!-- visitors comment shows here -->
                                    <div class="row">
                                        <div class="col-md-8 border">
                                             <p>
                                                i love the way they are dancing here..... great show
                                             </p>
                                             <!-- visitors Name shows here -->
                                             <p class="text-end d-flex align-items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                                </svg>
                                                <!-- name from database goes here -->
                                                James Edward
                                            </p>
                                        </div>
                                    </div>
                                        <!-- visitors comment ends here -->

                                    <!-- Admin's Reply goes here -->
                                    <div class="row">
                                        <div class="col-md-8 offset-md-1 border">
                                             <p>
                                                i love the way they are dancing here..... great show
                                             </p>
                                             <!-- visitors Name shows here -->
                                             <p class="text-end d-flex align-items-center justify-content-end gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check text-success" viewBox="0 0 16 16">
                                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                                    <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                                                </svg>
                                                <!-- name from database goes here -->
                                                James Edward
                                            </p>
                                        </div>
                                    </div>
                                    <!-- Admin's Reply goes here -->
                                </div>
                            </div>
                        </div>
                      </div>
                     <!-- comments view ends here -->


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