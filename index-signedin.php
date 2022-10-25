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
    <link rel="stylesheet" href="CSS/utilities.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" type="image/x-icon" href="Images/Krishi Bimb Favicon.png">

</head>
<body>
    <?php session_start(); ?>

    <!-- Hero Section -->
    <section id="hero-section">
    <div class="container-fluid hero-background">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top pb-2 pb-lg-0">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">
                    <img src="Images/Krishi Bimb Logo.png" alt="KrishiBimb-logo" class="ms-5 me-2">
                    <span class="navbar-logo-text pt-1 mt-1">Krishi Bimb</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto me-5">
                        <li class="nav-item mx-3">
                            <a href="#how" class="nav-link links-navbar">How it works</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="#who" class="nav-link links-navbar">Who we are</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a href="#what" class="nav-link links-navbar">What we do</a>
                        </li>
                        <li class="nav-item ms-3">
                            <a href="#footer" class="nav-link links-navbar">Contact Us</a>
                        </li>
                    </ul>

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
                            <h5><?php echo $_SESSION["loggedin_username"]; ?></h5>
                        </a>
                    </li>
                </ul>
                
                </div>
            </div>
        </nav>

        <!-- <img src="Images/Background.png" alt="Background Images" class="absolute hero-background"> -->
        <div class="flex-row mt-lg-5 pt-lg-5 ms-lg-5 ps-lg-5 title-text">
            <h1 class="hero-heading">Farmer to Buyer</h1>
            <h4 class="hero-subheading mt-5 mt-md-0">In a Snap</h4>
        </div>
        <div class="flex-row mt-5 ms-lg-5 ps-lg-5 title-text">
            <a href="addcrop.html"><button class="btn btn-lg btn-primary me-2 choice-button">Farmer</button></a>
            <a href="productpage.php"><button class="btn btn-lg btn-primary ms-2 choice-button">Buyer</button></a>
        </div>        
    </div>
    </section>

    <!-- How it works Section -->
    <section id="how">
        <div class="container-fluid">
            <h3 class="how-heading mb-5">How it works</h3>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-5 px-5">
                    <div class="features-card">
                        <img src="Images/Wheat Packet.svg" alt="Wheat Packet Illustrations" class="mb-4">
                        <h4>Post your products</h4>
                        <p>Farmer can directly post the product he/she want to sell and it will be up for bidding by buyers.</p>
                        <button class="btn btn-outline-primary mt-4">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mt-5 px-4">
                    <div class="features-card">
                        <img src="Images/Dollar Sign.svg" alt="Dollar Sign Illustrations" class="mb-4">
                        <h4>But your required crop</h4>
                        <p>Buyers can bid for their desired product and the buyer who placed the higher bid will get the product.</p>
                        <button class="btn btn-outline-primary mt-4">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 mt-5 px-5">
                    <div class="features-card">
                        <img src="Images/Delivery.svg" alt="Delivery Truck Illustrations" class="mb-4">
                        <h4>Hassel free devlivery</h4>
                        <p>We will ship your bought product to you without any problem.</p>
                        <button class="btn btn-outline-primary mt-4">Learn More</button>
                    </div>        
                </div>
            </div>
        </div>
    </section>

    <section id="who">
        <div class="container-fluid">
            <div class="row d-flex flex-row">
                <div class="col-lg-6 d-flex flex-column gx-5 whoweare-image">
                    <!-- <img src="Images/who are we.png" alt="Who we are image" class="whoweare-image"> -->
                </div>
                <div class="col-lg-6 gx-5 align-self-center">
                    <h3 class="who-heading mb-5">How it works</h3>
                    <p class="who-para">We are KrishiBimb and the problem we tried to tackle is E-Trading in Agriculture sector.
                        <br><br>Started with a vision to connect Farmers and all across India to Buyers across the country, KrishiBimb intends to play a critical role in crafting the future of Agriculture sector from a business point of view. 
                        <br><br>Driven by the idea of Atma Nirbhar Modern Bharat, that is self-sufficient modern India as a central theme. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="what">
        <div class="container-fluid">
            <div class="row d-flex flex-row">
                <div class="col-lg-6 flex-column">
                    <h3 class="who-heading mb-5">What we do</h3>
                    <p class="who-para">From a long time we have looked for modern and and new age farming techniques as a way to move ahead in the farming sector with company, our vision is to also make the transactions modern as well.
                        <br><br>At KrishiBimb, we intend to give the farmers a platform where they can sell their crops all over India and for the buyers the can buy the crops they want with assured quality, and therefore removing the middle men.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="2500">
                                <img src="Images/tractor.png" class="d-block w-100 what-img" alt="Tractor">
                              </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="Images/another-market.png" class="d-block w-100 what-img" alt="Market">
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="Images/market.png" class="d-block w-100 what-img" alt="Market">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="row flex-row gx-0 mb-5">
            <div class="col-lg-6 flex-column mb-5">
                    <h6 class="subheading-footer">FOLLOW US</h6>
                    <ul class="nav">
                        <li><a href="https://github.com/mayankdhnkr"><i class="fa-solid fa-globe fa-2x me-2 footer-icon"></i></a></li>
                        <li><a href="https://github.com/mayankdhnkr"><i class="fa-brands fa-github fa-2x mx-2 footer-icon"></i></a></li>
                        <li><a href="https://twitter.com/dhankar_mayank"><i class="fa-brands fa-twitter fa-2x mx-2 footer-icon"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/mayankxdhnkr/"><i class="fa-brands fa-linkedin-in fa-2x ms-2 footer-icon"></i></a></li>
                    </ul>
            </div>
            <div class="col-lg-6 flex-column">
                <h6 class="subheading-footer">WRITE US AT</h6>
                <a href="mailto:mayankdhanakr2002@gmail.com" class="text-decoration-none "><h4 class="footer-email">mayankdhankar2002@gmail.com</h4></a>
            </div>
        </div>


        <div class="row flex-row gx-0">
            <div class="col-lg-6 flex-column">
                <div class="row row-cols-2 flex-row info gx-0 mb-5">
                    <div class="col-12"><h6 class="subheading-footer">INFORMATION</h6></div>
                    <div class="col-3 mb-3"><a href="" class="nav-link footer-link">About Krishi Bimb</a></div>
                    <div class="col-7"><a href="" class="nav-link footer-link">Get in Touch</a></div>
                    <div class="col-3"><a href="" class="nav-link footer-link">Privacy Policy</a></div>
                    <div class="col"><a href="" class="nav-link footer-link">Terms of Service</a></div>
                </div>
            </div>
            <div class="col-lg-6 flex-column">
                <h6 class="subheading-footer">KEEP IN TOUCH</h6>
                <div class="row row-cols-2 flex-row info gx-0">
                    <div class="col-lg-5 form-floating me-4 mb-4">
                            <input type="text" id="floatingInput" class="form-control" placeholder="Mayank">
                            <label for="floatingInput">Your Name</label>
                    </div>
                    <div class="col-lg-5 form-floating mb-4 me-3">
                        <input type="email" id="floatingEmail" class="form-control" placeholder="mayank@gmail.com">
                        <label for="floatingEmail">Your Email</label>
                    </div>
                    <div class="col-lg-6 form-floating mb-2">
                        <textarea name="" id="floatingTextArea" class="form-control"placeholder="Leave your Message here"></textarea>
                        <label for="floatingTextArea">Your Message</label>
                    </div>
                    <div class="col-lg-2 ms-4 align-self-center footer-button">
                        <button class="btn btn-lg btn-primary">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <img src="Images/Wave.svg" alt="Wave" class="wave">

    
    <script src="app.js"></script>
</body>
</html>