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
<body class="bg-primary p-0 ">
    <section class="vh-sm-100 ">
        <div class="container-md mt-sm-5">
            <div class="row border">
                <div class="col-sm-2 border py-3 d-flex flex-column gap-4">
                    <div class="row">
                        <div class="col-md-12 text-center p-0">
                            <img src="./src/img/logo.png" alt="logo" class="img-fluid w-50 w-md-75 border-bottom img-logo ">
                        </div>
                    </div>
                    <div class="row p-0 h-auto h-md-50">
                        <div class="col-md-12 p-0">
                            <ul class="list-unstyled h-100 py-3 d-flex flex-column justify-content-around">
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
                        <div class="col-md-12 text-center">
                            <button class="fom-control py-2 px-5 btn bg-white text-primary">
                               Logout                         
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 ">
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
                                    <input type="text" class="form-control" placeholder="Sports, Entertainment, Politics, Global ...." name="Categories" id="categories">
                                </div>
                                <!-- 
                                    To save the post to draft which the user can use later you can use the same database table but have a column in the table as display status where the value would either be publish or draftBut remember when we want to display from the table we would use the row Ie(Display status) to get our data from the database for the index page or Blog page which all site visitors can see

                                 -->
                                <div class="row d-flex flex-row justify-content-between">
                                    <div class="col-sm-5 my-1 px-0 my-sm-0">
                                        <input type="submit" class="form-control px-3" name="submit" value="Draft">
                                    </div>
                                    <div class="col-sm-5  my-1 px-0 my-sm-0">
                                        <input type="submit" class="form-control px-3" name="submit" value="Submit">
                                    </div>
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