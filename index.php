<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <!-- bootstrap link start here -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- bootstrap link ends here -->
</head>
<body class="bg-primary vh-100">
    <section>
        <div class="container bg-dar pt-3">
            <form action="" method="" class="d-grid gap-4">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="display-3 text-white">Post Content</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 d-grid gap-3 py-3 px-5 border">
                        <div class="row">
                            <p class="display-5 text-white">
                                Title
                            </p>
                            <input type="text" class="form-control" name="" id="" placeholder="Title">
                        </div>
                        <div class="row">
                            <textarea class="form-control" name="" id="" rows="10" cols="" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex flex-column gap-3 gap-md-0 justify-content-between py-3 px-5 border ">
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
    </section>


<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>