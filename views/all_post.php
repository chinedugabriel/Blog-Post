<!-- 
    this would be part of the dashboard where the admin would be able to see all the post in an admin dashboard in a tabler form 

    1: admin should be able to update a single post.

    2: admin should be able to delete post.

    3: the admin should be able to change the status of a post to draft or publish.
 -->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
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
            <div class="row d-flex vh-100">
                <div class="col-sm-12 col-md-2 col-lg- py-3 d-flex flex-column gap-5 bg-primary">
                    <div class="row">
                        <div class="col-md-12 text-center p-0">
                            <img src="../src/img/blog_logo.png" alt="logo" class="img-fluid w-50 w-md-75 border-bottom img-logo ">
                        </div>
                    </div>
                    <div class="row p-0 h-auto h-md-50">
                        <div class="col-md-12 p-0">
                            <ul class="list-unstyled h-100 py-3 d-flex flex-column justify-content-around">
                                <li class="text-center py-2 border bg-white text-primary">
                                    <a href="http://localhost/php_projects/Blog-Post/views/all_post" class=" text-decoration-none ">
                                        All Post
                                    </a>
                                </li>
                                <li class=" text-center  py-2">
                                    <a href="http://localhost/php_projects/Blog-Post/views/add_post" class="text-white text-decoration-none">
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
                
                    <div class="row py-3">
                        <div class="col-md-12 text-center">
                            <p class="h1 text-primary">Post</p>
                        </div>
                    </div>
                    <div class="row border-top border-primary bg-white">
                        <div class="col-md-12 py-3">
                            <div class="row">
                                <div class=" table-responsive">
                                    <table class="table table-light table-hover">
                                        <thead >
                                            <tr class="text-center">
                                                <th>id</th>
                                                <th>Date</th>
                                                <th>Title</th>
                                                <th>Categories</th>
                                                <th>Status</th>
                                                <th>slider</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>1</td>
                                                <td>
                                                    12/05/2024
                                                </td>
                                                <td>
                                                    <!-- this link take you to the edith page -->
                                                    <a href= "">
                                                        Ai would change Sports in 2024
                                                    </a>
                                                </td>
                                                <td>
                                                    Sports, Entertainment
                                                </td>
                                                <td>
                                                    Published
                                                </td>
                                                <td>
                                                    <!-- confirmation icon for slider -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                        </svg>
                                                    </a>
                                                </td>

                                                <td>
                                                    <!-- Delete icon -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 text-danger " viewBox="0 0 16 16">
                                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                        </svg>   

                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    12/05/2024
                                                </td>
                                                <td>
                                                    <!-- this link would be used to edith each post -->
                                                    <a href= "">
                                                        Politics will change Nigeria in 2024
                                                    </a>
                                                </td>
                                                <td>
                                                    Sports, Entertainment
                                                </td>
                                                <td>
                                                    Published
                                                </td>
                                                <td>
                                                    <!-- confirmation icon for slider -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success " viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
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
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    12/05/2024
                                                </td>
                                                <td>
                                                    <!-- this link take you to the edith page -->
                                                    <a href= "">
                                                        Ai would change Sports in 2024
                                                    </a>
                                                </td>
                                                <td>
                                                    Sports, Entertainment
                                                </td>
                                                <td>
                                                    Published
                                                </td>
                                                <td>
                                                    <!-- confirmation icon for slider -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                        </svg>
                                                    </a>
                                                </td>

                                                <td>
                                                    <!-- Delete icon -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3 text-danger " viewBox="0 0 16 16">
                                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                                        </svg>   

                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    12/05/2024
                                                </td>
                                                <td>
                                                  <!-- this link take you to the edith page -->
                                                    <a href= "">
                                                        Ai would change Sports in 2024
                                                    </a>
                                                </td>
                                                <td>
                                                    Sports, Entertainment
                                                </td>
                                                <td>
                                                    Published
                                                </td>
                                                <td>
                                                    <!-- confirmation icon for slider -->
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-danger" viewBox="0 0 16 16">
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                                        </svg>
                                                    </a>
                                                </td>

                                                <td>
                                                    <!-- Delete icon -->
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
                    </div>
                    

                </div>
            </div>
        </div>
    </section>


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>