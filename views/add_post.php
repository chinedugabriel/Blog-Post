<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <!-- bootstrap link start here 
    * Bootstrap v5.3.0-alpha3 
    -->
    <link rel="stylesheet" href="./../bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="../src/img/favicon.ico" type="image/x-icon">
</head>
<body class="p-0 ">
    <section class="">
        <div class="container-fluid">
            <div class="row vh-100">
                <div class="col-sm-12 col-md-2 py-3 d-flex flex-column gap-5 bg-primary">
                    <div class="row">
                        <div class="col-md-12 text-center p-0">
                            <img src="../src/img/blog_logo.png" alt="logo" class="img-fluid w-50 w-md-75 border-bottom img-logo ">
                        </div>
                    </div>
                    <div class="row p-0 h-auto h-md-50">
                        <div class="col-md-12 p-0">
                            <ul class="list-unstyled h-100 py-3 d-flex flex-column justify-content-around">
                                <li class="text-center py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/views/all_post" class="text-white text-decoration-none">
                                        All Post
                                    </a>
                                </li>
                                <li class=" text-center bg-white text-primary py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/views/add_post" class=" text-decoration-none">
                                        Add Post
                                    </a>
                                </li>
                                <li class=" text-center py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/views/categories" class="text-white text-decoration-none">
                                        Catagories
                                    </a>
                                </li>
                                <li class=" text-center py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/views/comments" class="text-white text-decoration-none">
                                        Comments
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="row mt-auto">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button class="btn py-md-2  btn-outline-light d-flex align-items-center justify-content-center gap-2 w-50 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                </svg>
                               Logout                         
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10 ">
                    <form action="../controller/postController.php" method="post" enctype="multipart/form-data" class="d-grid gap-1 p-3 pt-0 h-75">
                        <div class="row py-3">
                            <div class="col-md-12 text-center">
                                <p class="h1 text-primary">Post Content</p>
                            </div>
                        </div>
                        <div class="row border border shadow">
                            <div class="col-md-8 d-grid gap-3 py-3 px-5 border-end">
                                <div class="row">
                                    <p class="display-5 text-primary m-0">
                                        Title
                                    </p>
                                    <input type="text" class="form-control rounded rounded-0" name="postInputTitle" placeholder="Title" required>
                                </div>
                                <div class="row">
                                    <textarea class="form-control rounded rounded-0" name="postInputDescription" id="" rows="10" cols="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column gap-3 gap-md-0 justify-content-between py-3 px-5 ">
                            <div class="row d-flex flex-row justify-content-between">
                                    <div class="col-sm-5 my-1 px-0 my-sm-0">
                                        <select class="form-select" name="postInputStatus" id="post-status-dropdown">
                                            <option class="post-status text-danger" value="draft" onclick="changeDropdownText()"> Draft</option>
                                            <option class="text-success" value="publish" onclick="changeDropdownText()"> Publish</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5 my-1 px-0 my-sm-0">
                                        <input type="submit" class="form-control px-3 btn btn-primary" name="submitPost" value="Submit" >
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <p class="text-primary p-0">Add an Image to Post</p>
                                    <input type="file" class="form-control" name="imageInput" id="upload-img" >
                                </div>
                                <div class="row ">
                                    <div class="col-sm-12 p-0">
                                        <!-- imgPreview is used to show the image in the file input -->
                                        <div id="imgPreview" class="border shadow-sm d-flex justify-content-center align-items-center image-preview-box" style=" width: 70%;height: 150px; background-repeat: no-repeat; background-size:contain; background-position: center;"><p id="img-message" class="text-primary  h2">Preview Image</p></div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-12 p-0">
                                        <p class="text-primary">
                                            Add Post to slider : &nbsp;
                                            <input type="checkbox" name="postInputSliderStatus"id="slider-checker" class="form-check-input" value="hide" >
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-primary p-0">
                                        Input Categories:
                                    </p>
                                    <input type="text" class="form-control" placeholder="Sports, Entertainment, Politics, Global ...." name="categoriesInput" id="categories" list="category-list">
                                    <datalist id="category-list" class="">
                                        <option value="Sports" class="">Sports</option>
                                        <option value="Entertainment" class="">Entertainment</option>
                                        <option value="Politics" class="">Politics</option>
                                        <option value="Nature" class="">Nature</option>
                                    </datalist>
                                </div>
                                <!-- 
                                    To save the post to draft which the user can use later you can use the same database table but have a column in the table as display status where the value would either be publish or draftBut remember when we want to display from the table we would use the row Ie(Display status) to get our data from the database for the index page or Blog page which all site visitors can see

                                 -->

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <script src="./../script.js"></script>
    <script src="./../bootstrap/js/bootstrap.js"></script>
</body>
</html>