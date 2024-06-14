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
<body>

<section class="sec1-login bg-primary ">
    <div class="container-fluid vh-100 d-md-flex justify-content-center align-items-center">
        <div class="row h-100 ">
            <div class="col-sm-8 d-none d-lg-flex justify-content-center align-items-center bg-white">
                <img src="../src/img/bg_login.png" alt="a vector image of content creators " style="width:70%">
            </div>
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center gap-3 px-sm-5 ">
                <div class="row">
                    <div class="col-sm-12 text-md-center">
                        <img src="../src/img/blog_logo.png" alt="" class="img-fluid" style="width:70%">
                    </div>
                </div>

                <div class="row py-sm-5 px-sm-3 text-white w-100 d-flex justify-content-center align-items-center">
                    <div class="col-sm-12">
                        <form action="" method="" class=" d-flex flex-column gap-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h3">SignUp</p>
                                    <p>signup to contribute to the society</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        Name:
                                    </p>
                                    <input type="text" name="regUserName" id="regUserName" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p>
                                        Email:
                                    </p>
                                    <input type="text" name="regUserEmail" id="regUserEmail" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p id="regUserPasswordText">
                                        Password:
                                    </p>
                                    <input type="text" name="regUserPassword" id="regUserPassword" class="form-control" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <p id="regUserConfirmPasswordText">
                                        Confirm Password:
                                    </p>
                                    <input type="text" name="regUserConfirmPassword" id="regUserConfirmPassword" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-1 mt-sm-3">
                                <div class="col-sm-12"><button type="submit" class="btn btn-outline-light form-control">Submit</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<script src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>