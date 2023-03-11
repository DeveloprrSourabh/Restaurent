
<?php

$password = $email = "";
$emailErr =  $passErr = ""; 
$flag = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required !";
    $flag = false;
  }

    // password check
   if (empty($_POST["password"])) {
    $passErr = "Password is required !";
    $flag = false;
  } 
}


$login = false;
$showError = false;
include '_dbconnect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $sql = "SELECT * from users where `username` = '$username' AND password='$password'";
  $sql = "SELECT * From userdata where email = '$email'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
        

    while ($row = mysqli_fetch_assoc($result)) {
      if ($password == $row['password']) {
          # code...
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        
      } else {
        $showError = "Invalid Cardentials !";
      }

    }

  } else {
    $showError = "Invalid Cardentials !";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <title>Bootstrap Example</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" media="screen and (max-width: 800px)" type="text/css" href="assets/css/responsive.css" />
    <link rel="stylesheet" media="screen and (max-width: 650px)" type="text/css" href="assets/css/responsive2.css" />
    <link rel="stylesheet" media="screen and (max-width: 400px)" type="text/css" href="assets/css/responsive3.css" />
  </head>
  <body>
	
<?php include 'header.php' ?>
  <!-- signin start -->
  <div class="main-overlay">
    <div class="page-title-overlay">
      <div id="overlay-container2" class="container">
        <div class="page-title-inner">
          <h1 class="page-title">
            Reservations Form
          </h1>
          <div class="d-flex breadcrumb">
            <a href="index.php">Home</a>
            <div class="animated-box"></div>
            <div class="current">Reservations Form</div>
          </div>
        </div>
      </div>
    </div>
    <!-- form start -->
    <div class="form-div">
      <div class="form-div-start">
        <div class=" form-cont container">
         <?php
  if ($login) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are login  successfully.</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  if ($showError) {
    echo '   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed ! </strong> ' . $showError . '</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

  ?>
          <div class="row">
            <div id="form-img" class="col-md-6">
              <div class="form-img-start">
                <img class="form-img" src="https://img.freepik.com/free-vector/sign-up-concept-illustration_114360-7885.jpg?w=2000">
              </div>
            </div>
            <div class="col-md-6">
              <form  class="form-start" method="post" action="signin.php">
                <input  id="form-id" class="form-input" name="email" placeholder="Email here">
                 <div class="error"> <?php  echo $emailErr;?>  </div>
                <div class="mb-5">
                <input  id="form-id" type="password" class="form-input" name="password" placeholder="Password" >
                 <div class="error"> <?php  echo $passErr;?></div>
                 </div>

                <div d-flex>
                  <button type="submit" name="submit" class="btn">Signin</button>
                    <a href="signup.php">
                    <span class="signup">
                     Sign Up
                     </span>
                     </a>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- form end -->
  </div>
    <!-- signin end -->

    <!-- // '; -->
   <?php include 'footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>



