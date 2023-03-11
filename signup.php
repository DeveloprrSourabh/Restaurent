<!-- Email Verification Start -->
<?php
$to = "developerr.sourabh@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: developrr.sourabh@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

?>

<!-- Email Verification Start -->

  
<?php
error_reporting(E_ERROR | E_PARSE);
$password = $cpassword = $email = $phone = $name = "" ;
$emailErr = $cpass_err = $passErr = $name_err = $phoneErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $flag = true;
  // email check
  if (empty($_POST["email"])) {
  
    $emailErr = "Email is required !";
    $flag = false;
  }    elseif($_POST['email']){
        
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format ! ";
    $flag = false;
                  }

} 

    //name check
 
    if (empty($_POST['name'])) {
  
      $name_err = "Name is required";
    $flag = false;

    } elseif ($_POST['name']) {
      $name = $_POST['name'];
             $number    = preg_match('@[0-9]@', $name);
    $specialChars = preg_match('@[^\w]@', $name);
      if($number || $specialChars){
        $name_err = "invalid format !";
    $flag = false;

      }
    }

    //phone check

    if(empty($_POST['phone']))
    {
        $phoneErr = "Phone Number is required !";
    $flag = false;

      }
        elseif($_POST['phone'])
{
 $phone = $_POST['phone'];
$uppercase = preg_match('@[A-Z]@', $phone);
$lowercase = preg_match('@[a-z]@', $phone);
$number    = preg_match('@[0-9]@', $phone);
$specialChars = preg_match('@[^\w]@', $phone);
if($uppercase || $lowercase ||  $specialChars ) {
    $passErr = "enter a valid phone number !";
    $flag = false;

}
}
      

      //Confirm password check
      if(empty($_POST['cpassword']))
      {
        $cpass_err = "Confirm pasword is required !";
    $flag = false;

      }
        elseif ($_POST['password'] !=$_POST['cpassword'] ) {
          $cpass_err = "Password is not match !";
    $flag = false;

        }
      


    //password check
   if (empty($_POST["password"])) {
    $passErr = "Password is required !";
    $flag = false;

  } elseif($_POST['password'])
{
 $password = $_POST['password'];
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $passErr = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    $flag = false;

}
}
}




$showAlert = false;
$showError = false;
include '_dbconnect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $existSql = "SELECT * FROM `userData` WHERE email = '$email'";
  $result = mysqli_query($conn,$existSql);
  $numExistRow = mysqli_num_rows($result);

  if ($numExistRow > 0) {
    $showError = "Username Already Exist";
  } else{
    if($password == $cpassword){
      // $hash = password_hash($password,PASSWORD_DEFAULT);
      if($flag){
      $sql = "INSERT INTO `userdata` (`email`, `password`, `dt`, `name`,`phone`) VALUES ('$email', '$password',  current_timestamp(), '$name',$phone);";
      $result= mysqli_query($conn,$sql);
      if($result){
        $showAlert = true;
      }else {
        $showError = " Password Do Not Match";
      }
    }
}
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
	
<?php include 'header.php' ;
?>
  

  <!-- signin start -->
  <div class="main-overlay">
    <div class="page-title-overlay">
      <div id="overlay-container" class="container">
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


  if ($showError) {
    echo '   <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Failed!</strong>' . $showError . '</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }  
  if($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You can login now.</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

   if(!$flag){
       echo '   <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Note ! </strong>All field required.</strong>
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
              <form method="post" action="signup.php" class="form-start">
                <input id="form-id" type="text"  class="form-input" name="name" placeholder="Name here" >
                  <div class="error"> <?php  echo $name_err;?></div>
                <input id="form-id" class="form-input" name="email" placeholder="Email here" >
                <div class="error"> <?php  echo $emailErr;?></div>
                <div>
                  
                  <input id="form-id" type="Phone" class="form-input" name="phone" placeholder="Phone Number here" >
                <div class="error"> <?php  echo $phoneErr;?></div>
                <input  id="form-id" type="password"  class="form-input " name="password" placeholder="Password" >
                <div class="error"> <?php  echo $passErr;?></div>
                <input  id="form-id" type="password" class="form-input " name="cpassword" placeholder="Confirm Password" >
                <div class="error"> <?php  echo $cpass_err;?></div>
                 </div>
                <div class= "d-flex mt-5">
                  <button class="btn">Signup</button>
                <a href="signin.php">
                  <span class=" signup">
                   Signin
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

   
   <?php include 'footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>



