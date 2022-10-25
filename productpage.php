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
    <link rel="stylesheet" href="CSS/productpage.css">
    <link rel="stylesheet" href="CSS/utilities.css">
    <link rel="icon" type="image/x-icon" href="Images/Krishi Bimb Favicon.png">

</head>
<body>
    <?php session_start(); ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <img src="Images/Krishi Bimb Logo.png" alt="KrishiBimb-logo" class="ms-5 me-2">
                <span class="navbar-logo-text">Krishi Bimb</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex">
                    <li class="navbar-item align-self-center fa-2x">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"></button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="navbar-item">
                        <a href="" class="nav-link">
                            <?php    
                                echo '<img src="'.$_SESSION["loggedin_image"].'" alt="Character Avatar" class="avatar">';
                            ?>
                        </a>                        
                    </li> 
                    <li class="navbar-item align-self-center">
                        <a href="profile.html" class="nav-link">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <h1 class="heading mt-3">Find Crops</h1>
    </div>
    <form action="search.php" method="post">
    <div class="div mt-5">
        <div class="d-flex search">
                <input type="text" name="search" id="searchfield" class="form-control me-2" placeholder="Search a Product">
                <button class="btn btn-lg btn-primary">Search</button>
            
        </div>
    </div>
    </form>

    <div class="d-flex mt-5">
        <div class="product-list">
            
            <!-- Php starts from here -->
            <?php
                $db = mysqli_connect("localhost", "root", "", "krishibimb");
                $result = mysqli_query($db, "SELECT * FROM crops ORDER BY id DESC");
                while($user_data = mysqli_fetch_array($result)) {
                    $img="uploadimage/".$user_data["crop_imagename"];
                    $name=$user_data["crop_name"];
                    $stock=$user_data["crop_stock"];
                    $price=$user_data["crop_price"];
                    $posted=$user_data["crop_posted"];
                    $desc=$user_data["crop_desc"];
                    echo "<div class='product-card card my-4'>"; 
                    echo "  <div class='row g-0'>";           
                    echo "      <div class='col-md-3'>";                
                    echo "          <img src='".$img."' alt='' class='rounded-start course-image'>";            
                    echo "      </div>";            
                    echo "      <div class='col-md-9'>";            
                    echo "          <div class='card-body'>";            
                    echo "              <h5 class='card-title'>".$name."</h5>";            
                    echo "              <p class='card-text'>".$desc."</p>";            
                    echo "              <p class='card-text'><small class='text-muted'>Posted on      :   </small>".$posted."</p>";            
                    echo "              <p class='card-text'><small class='text-muted'>Stock Left     :   </small>".$stock."</p>";            
                    echo "              <p class='card-text mb-0'><small class='text-muted'>Price</small></p>";            
                    echo "              <div class='d-flex'>";            
                    echo "                  <h2 class='price'>".$price."</h2>";            
                    echo "                  <a href='stock.php?id=$user_data[id]' class='ms-auto'><button class='btn btn-primary'>Buy</button></a>";            
                    echo "              </div>";            
                    echo "          </div>";            
                    echo "      </div>";            
                    echo "  </div>";            
                    echo "</div>";                    
                }
            ?>
        </div>
    </div>
</body>
</html>