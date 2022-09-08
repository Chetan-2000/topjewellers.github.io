<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/prod.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <title>all products</title>
</head>
<body>
    <?php           
        include "header.php";                 
    ?>
    <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">TopJewellers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/jms_project/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/jms_project/about.php">About</a></li>
                    </ul>
                    <form class="d-flex">
                        <div class="me-5">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Login</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="/jms_project/login.php">Login</a></li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li><a class="dropdown-item" href="/jms_project/reg_form.php">Register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>         -->
        <!-- Header-->
        <header class="bg-warning py-5">
            <div class="container px-4 px-lg-5 my-3">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Our Products</h1>
                    <p class="lead fw-normal text-black-50 mb-0">Traditional | Contemporary | Fusion</p>
                    <p class="lead fw-normal text-white-50 mb-0">Gold  |  silver  |  diomand  |  platinum</p>

                </div>
            </div>
        </header>

        <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->   
                                <img class='card-img-top' src='/jms_project/images/goldset.jpg'>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Gold Collection</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/jms_project/homepage/">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                                <img class='card-img-top' src='/jms_project/images/silverset.jpg' alt="silverset" />                           
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Silver Collection</h5> 
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/jms_project/homepage/">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                                <img class='card-img-top' src='/jms_project/images/diamondset.jpg' alt="earring" />                       
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Collection name-->
                                    <h5 class="fw-bolder">Diamond Collection</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/jms_project/homepage/">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                                <img class='card-img-top' src='/jms_project/images/platinumset.jpg'>                   
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Collection name-->
                                    <h5 class="fw-bolder">Platinum Collection</h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-outline-dark mt-auto" href="/jms_project/homepage/">view</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>


    <footer class="py-5 bg-info">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; 2022 TopJewellers. All rights reserved. | Privacy Policy</p></div>
    </footer>

</body>
</html>