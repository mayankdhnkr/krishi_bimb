<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishi Bimb</title>

    <!-- Bootstrap Framework -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/8215aa9d5e.js" crossorigin="anonymous"></script>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="CSS/addcrop.css">
    <link rel="stylesheet" href="CSS/utilities.css">
    <link rel="icon" type="image/x-icon" href="Images/Krishi Bimb Favicon.png">

</head>
<body>
    <?php session_start(); ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="index-signedin.php" class="navbar-brand">
                <img src="Images/Krishi Bimb Logo.png" alt="KrishiBimb-logo" class="ms-5 me-2">
                <span class="navbar-logo-text">Krishi Bimb</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex">
                    <li class="navbar-item d-flex align-items-center mx-auto">
                        <a href="" class="nav-link me-sm-3 me-lg-0">
                            <?php    
                                echo '<img src="'.$_SESSION["loggedin_image"].'" alt="Character Avatar" class="avatar">';
                            ?>
                        </a>
                        <a href="profile.html" class="nav-link me-sm-3 me-lg-0">
                            <h5><?php echo $_SESSION["loggedin_username"]; ?></h5>
                        </a>                        
                        <div class="dropdown dropdown-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li> 
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="d-flex">
        <h1 class="heading mt-3">Add Crop</h1>
    </div>

    <form action="addcrop.php" method="post" enctype="multipart/form-data">
        <div class="d-flex flex-row row flex-row-reverse gx-5 fields mt-5">
            <div class="col-lg-6 mb-5">
                <h5 class="mb-4">Upload Image</h5>
                <div id="upload-image">
                    <img src="Images/uploadimag.svg" id="placeholder-image">
                </div>
                <input class="mt-4 form-control" type="file" id="img-upload" name="fileupload">
            </div>
            <div class="col-lg-6 mb-5">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Crop Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="crop_name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Price</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="crop_price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Stock</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name="crop_stock">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Crop Description</label>
                    <textarea type="text" class="form-control" placeholder="Another input placeholder" rows="3" name="crop_desc"></textarea>
                </div>

                <div class="buttons-grp">
                    <button class="btn btn-lg btn-primary" type="submit">Post</button>
                    <button class="btn btn-lg btn-outline-primary">Cancel</button>
                </div>
            </div>
        </div>
    </form>
    

    <script src="JS/addcrop.js"></script>
</body>
</html>