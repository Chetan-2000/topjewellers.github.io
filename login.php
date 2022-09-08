<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
        
    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    

    <!-- Custom styles for this template -->
    <link href="css/loginpage.css" rel="stylesheet">  
  </head>
  <body>

  <!-- php -->
  <?php

    if ($_SERVER['REQUEST_METHOD']=='POST'){
      $email=$_POST['email'];
      $pass=md5($_POST['pass']);

      //connecting to database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "jms_login_demo";

      //create a connection , create object
      $conn = mysqli_connect ($servername, $username, $password, $database);

      // for login details insert sql query
      $sql = "INSERT INTO `jms_login` (`email_ID`, `Password`) VALUES ('$email', '$pass'); ";
      $result = mysqli_query($conn, $sql);

    }
  ?>
<!-- navigation bar -->
  <div class="fixed-top">
    <?php           
        include "header.php";                 
    ?>
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-success">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">TopJewellers</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/jms_project/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/jms_project/reg_form.php">Register</a>
                  </li>
                </ul>
                  <div class="searchbar">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                  </form>
                  </div>
              </div>
            </div>
        </nav> -->
    </div>

<!-- navigation div end -->

  <div class="container text-center">
  <!-- Login form -->
    <form class="form-signin" action = "/jms_project/login.php" method="post">
        
          <img class='mb-4 mt-5' src='/jms_project/images/jms.jpeg' height ='120px' width='120'>

      <h1 class="h3 mb-3 font-weight-normal a">Please Login Here</h1>
      <label for="email" class="sr-only"></label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus aria-describedby="emailHelp">
      <label for="pass" class="sr-only"></label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me <!-- for extra spacing between this div text--> &nbsp;&nbsp
        </label>
        <a id="formFooter" href="#"> Forgot Password?</a>
      </div>
       
      <button class="btn btn-success" type="submit" onclick='loginconfirm'>Login</button>
      <!-- javascript for login button -->
      <!-- <script>
        function loginconfirm() {
          confirm("Are you want to login!");
        }
      </script> -->

    </form>

    <button class="btn btn-secondary " href="C:\xampp\htdocs\jms_project\reg_form.php">back</button>
    <button class="btn btn-primary"  action="C:\xampp\htdocs\jms_project\reg_form.php" method="POST" enctype="multipart/form-data">Register</button>
    <p class="mt-5 mb-3 text-muted">thank you</p>
    

  </div>
    <!-- Footer-->
    <footer class="py-5 bg-success">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; 2022 TopJewellers. All rights reserved. | Privacy Policy</p></div>
    </footer>
      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"></script>')</script> -->
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

  </body>
</html>