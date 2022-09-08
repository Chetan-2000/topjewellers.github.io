
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/reg_form.css" type="text/css" rel="stylesheet">
    <title>Registration Form</title>
  </head>
  <body>


  <!-- php -->
  <?php

    if ($_SERVER['REQUEST_METHOD']=='POST'){
      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $mnumber=$_POST['mnumber'];
      $address=$_POST['address'];
      $state=$_POST['state'];
      $city=$_POST['city'];
      $pin=$_POST['pin'];
      $createpass=md5($_POST['createpass']);
      $confirmpass=md5($_POST['confirmpass']);

      //connecting to database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "jms_reg_demo";

      //create a connection , create object
      $conn = mysqli_connect ($servername, $username, $password, $database);

      // for lofin details insert sql query
      $sql = "INSERT INTO `jms_demo_reg` (`First_Name`, `Middle_Name`, `Last_Name`, `email_Id`, `Mobile_Number`, `Address`, `State`, `City`, `Pin_Code`, `Create_Pass`, `Confirm_Pass`, `Reg_Date`) 
        VALUES ('$fname', '$mname', '$lname', '$email', '$mnumber', '$address', '$state', '$city', '$pin', '$createpass', '$confirmpass', current_timestamp()); ";
      
      $result = mysqli_query($conn, $sql);

    }
  ?>

<!-- navbar -->
  <?php           
    include "header.php";                 
  ?>

<!-- registration form navigation bar -->

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand">TopJewellers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/jms_project/homepage/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/jms_project/login.php">login</a>
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

<!-- registration form for customers -->

<div class="container">
    <form class="row g-3 needs-validation" action = "/jms_project/reg_form.php" method="post" onSubmit = "return checkPassword(this)" novalidate>
    <div class="formhead"><h1 align="center">Register Here</h1></div>
    <div class="col-md-4">
        <label for="fname" class="form-label">First name</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="First name">
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="mname" class="form-label">Middle name</label>
        <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle name">
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="lname" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name">
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">Username/Email ID</label>
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Please choose a username.
        </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="mnumber" class="form-label">Mobile Number</label>
        <input type="text" class="form-control" id="mnumber" name="mnumber">
        <div class="valid-feedback">
        Looks good!
        </div>
    </div>

    <!-- Address Division-->
    <div class="col-md-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" required>
        <div class="invalid-feedback">
        Please provide a valid Addres.
        </div>
    </div>

        <!-- State Division --> 
    <div class="col-md-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" id="state" name="state" required>
        <div class="invalid-feedback">
        Please provide a valid State.
        </div>
    </div>

    <!-- City Division --> 
    <div class="col-md-3">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" required>
        <div class="invalid-feedback">
        Please provide a valid City.
        </div>
    </div>

    <div class="col-md-3">
        <label for="pin" class="form-label">Pin Code</label>
        <input type="text" class="form-control" id="pin" name="pin" required>
        <div class="invalid-feedback">
        Please provide a valid pin code.
        </div>
    </div>

  <!-- Create Password -->
    <div class="col-md-6">
      <label for="createpass" class="form-label">Create Password</label>
          <input type="password" class="form-control" id="createpass" name="createpass" minlength="8" placeholder="Password" 
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and 
                      lowercase letter, and at least 8 or more characters" required>
            <input type="checkbox" onclick="crPass()"> Show Password
          <!-- javascript for password require -->
            <script>
              function crPass() {
                var x = document.getElementById("createpass");
                if (x.type === "password") {
                  x.type = "text";
                }
                else 
                {
                  x.type = "password";
                }
              }
          </script>
    </div>  
  
  <!-- Confirmed Password -->
    <div class="col-md-6">
      <label for="confirmpass" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmpass" name="confirmpass" minlength="8" placeholder="Password" 
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and 
                      lowercase letter, and at least 8 or more characters" required>
          <input type="checkbox" onclick="cpPass()"> Show Password
          <!-- javascript for password require -->
            <script>
              function cpPass() {
                var x = document.getElementById("confirmpass");
                if (x.type === "password") {
                  x.type = "text";
                }
                else 
                {
                  x.type = "password";
                }
              }
          </script>
  
    <script>
          
          // Function to check Whether both passwords
          // is same or not.
          function checkPassword(form) {
              createpass = form.createpass.value;
              confirmpass = form.confirmpass.value;

              // If password not entered
              if (createpass == '')
                  alert ("Please enter Password");
                    
              // If confirm password not entered
              else if (confirmpass == '')
                  alert ("Please enter confirm password");
                    
              // If Not same return False.    
              else if(createpass != confirmpass) {
                  alert ("\nPassword did not match: Please try again...")
                  return false;
              }

              // If same return True.
              else{
                  alert("Password Match ")
                  return true;
              }
          }
      </script>
    </div>

      <div class="col-12">
          <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="terms" name="terms" required>
          <label class="form-check-label" for="terms">
              Agree to terms and conditions
          </label>
          <div class="invalid-feedback">
              You must agree before submitting.
          </div>
          </div>
      </div>
      <div class="col-12">
          <button class="btn btn-primary" type="submit" onclick="register()">Register</button>
                <!--Alert msg in javascript-->
            <script>
                function register() {
                  alert("registered Successfully!");
                }
            </script>
          <button class="btn btn-secondary" href="#">back</button>

      </div>
    </form>
</div>
  <!-- Footer-->
    <footer class="py-5 mt-5 bg-primary">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; 2022 TopJewellers. All rights reserved. | Privacy Policy</p></div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"></script>')</script> -->
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>