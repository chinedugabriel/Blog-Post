<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- bootstrap link start here -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="./src/img/favicon.ico" type="image/x-icon">
</head>
<body class="bg-primary">
    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container-fluid px-3 border h-md-75 ">
            <div class="row h-100">
                <div class="col-md-2 h-md-100 border-end d-flex flex-column justify-content-around align-items-center p-0 px-1">
                    <div class="row w-75 border-bottom">
                        <div class="col-md-12 text-center">
                            <img src="./src/img/logo.png" alt="logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="row w-100 p-0 h-50">
                        <div class="col-md-12 p-0 ">
                            <ul class="list-unstyled h-100 py-3 d-flex flex-column justify-content-around ">
                                <li class="text-center py-2">
                                    <a href="#" class="text-white text-decoration-none">
                                        All Post
                                    </a>
                                </li>
                                <li class=" text-center border  py-2">
                                    <a href="#" class="text-white text-decoration-none">
                                        Add Post
                                    </a>
                                </li>
                                <li class=" text-center py-2">
                                    <a href="#" class="text-white text-decoration-none">
                                        Catagories
                                    </a>
                                </li>
                                <li class=" text-center py-2">
                                    <a href="#" class="text-white text-decoration-none">
                                        Add Catagories
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="fom-control py-2 px-4 btn border btn-border-white text-white">
                               Logout                         
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 offset-md-1">
                    <form action="" method="" class="d-grid gap-1 p-3 pt-0 h-100">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p class="display-5 text-white">Post Content</p>
                            </div>
                        </div>
                        <div class="row border">
                            <div class="col-md-8 d-grid gap-3 py-3 px-5 border-end">
                                <div class="row">
                                    <p class="display-5 text-white m-0">
                                        Title
                                    </p>
                                    <input type="text" class="form-control rounded rounded-0" name="" id="" placeholder="Title">
                                </div>
                                <div class="row">
                                    <textarea class="form-control rounded rounded-0" name="" id="" rows="10" cols="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column gap-3 gap-md-0 justify-content-between py-3 px-5 ">
                                <div class="row">
                                    <p class="text-white p-0">Add an Image to Post</p>
                                    <input type="file" class="form-control" name="upload-img" id="upload-img">
                                </div>
                                <div class="row ">
                                    <!-- img should display when the user uploads an image -->
                                    <img src="./src/img/259609483_10159616963876670_8003904271829121769_n.jpg" class="img-fluid w-50 m-0 p-0 rounded shadow" id="uploaded-img">
                                </div>
                                <div class="row">
                                    <p class="text-white p-0">
                                        Input Categories:
                                    </p>
                                    <input type="text" class="form-control" placeholder="Sports, Entertainment, Politics, Global ...." name="Categories" id="catigories">
                                </div>
                                <div class="row">
                                    <input type="submit" class="form-control" name="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>