<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap link start here 
    * Bootstrap v5.3.0-alpha3 
    -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
    <link rel="shortcut icon" href="../src/img/favicon.ico" type="image/x-icon">
</head>
<body class="">
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
                                    <a href="http://localhost/php_projects/Blog-Post/pages/all_post" class="text-white text-decoration-none">
                                        All Post
                                    </a>
                                </li>
                                <li class=" text-center  py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/pages/add_post" class="text-white text-decoration-none">
                                        Add Post
                                    </a>
                                </li>
                                <li class=" text-center border bg-white text-primary py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/pages/categories" class="text-primary text-decoration-none">
                                        Catagories
                                    </a>
                                </li>
                                <li class=" text-center py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/pages/comments" class="text-white text-decoration-none">
                                        Comments
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="row mt-auto">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button class="btn py-md-2  btn-outline-light d-flex align-items-center justify-content-center gap-2 w-50">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                            </svg>
                               Logout                         
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-10  pt-3 p-start-2">
                <!-- <form action="" method="" class="d-grid gap-1 p-3 pt-0 h-100"> -->
                        <div class="row py-3 border-bottom border-primary">
                            <div class="col-md-12 text-center">
                                <p class="h1 text-primary">Categories</p>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-md-7 offset-md-1 py-3 ">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <table class="table table-light table-hover">
                                            <thead >
                                                <tr class="text-center">
                                                    <th>id</th>
                                                    <th>Name</th>
                                                    <th>Edith</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>
                                                        Sports
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 text-danger " viewBox="0 0 16 16">
                                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                            </svg>   

                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>
                                                        Politics
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 text-danger " viewBox="0 0 16 16">
                                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                            </svg>   

                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 offset-md-1 d-flex flex-column gap-3 gap-md-0 justify-content-between py-3 shadow">
                                <form action="" method="post">
                                    
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <p class="text-primary p-0 h3">Add Category</p>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control rounded-0" placeholder="Sports, Entertainment, Politics, Global ...." name="Categories" id="categories">
                                        </div>
                                    </div>
                                    <!-- 
                                        To save the post to draft which the user can use later you can use the same database table but have a column in the table as display status where the value would either be publish or draftBut remember when we want to display from the table we would use the row Ie(Display status) to get our data from the database for the index page or Blog page which all site visitors can see
    
                                        -->
                                    <div class="row d-flex flex-row justify-content-between">
                                        <div class="col-sm-12 my-1 my-sm-0">
                                            <input type="submit" class="form-control px-3" name="submit" value="Save">
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    <!-- </form> -->

                </div>
            </div>
        </div>
    </section>


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>