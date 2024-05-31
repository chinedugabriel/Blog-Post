<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap link start here 
    * Bootstrap v5.3.0-alpha3 
    -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="./src/img/favicon.ico" type="image/x-icon">
</head>
<body class=" ">
 <?php
    include_once "./include/user_menu.inc.php";
 ?>

    <section class="mt-3">
        <div class="container">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="row text-primary border-bottom border-primary border-2">
                        <div class="col-sm-12">
                            <p class="h4">Latest News</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- main news content goes here -->

                        </div>
                    </div>
                </div>
                <div class="col-sm-3 offset-sm-1 text-primary d-none d-sm-flex flex-column">
                    <!-- category goes here -->
                    <div class="row border-bottom border-primary border-2 mb-2">
                        <div class="col-sm-12">
                            <p class="h4">More News</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="list-unstyled">
                                <li class="text-style-none">
                                    <a href="#" class="text-decoration-none">
                                        Politics
                                    </a>
                                </li>
                                <li class="text-style-none">
                                    <a href="#" class="text-decoration-none">
                                        Sports
                                    </a>
                                </li>
                                <li class="text-style-none">
                                    <a href="#" class="text-decoration-none">
                                        Entertainment
                                    </a>
                                </li>
                                <li class="text-style-none">
                                    <a href="#" class="text-decoration-none">
                                        Travel
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>