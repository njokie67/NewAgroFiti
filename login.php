<?php
error_reporting(0);
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  include_once "constants/header.php"; 


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login page</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/stylee.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<style>
    body{
        background-image: url("two.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    body::after{
    content: "";
    width: 100%;
    height: 100%;
    position:absolute;
    top: 0;
    left:0;
    background-color: rgba(21, 20, 51, 0.6);
    z-index: -1;
 }
  
 .card{
    background-color: #ffffff78!important;
    
 }
 
 .button-change{
    background-color: #343a40;
    color: white;

 }
 .button-change:hover{
    background-color: black;
    color: #ffc107;
 }
 a{
     color: black;
 }
 a:hover{
     color:  #fff;
 }
 .required {
  background: red;
}

</style>
<body>
<div class="container mt-3 mb-2">
    <div class="card mx-auto" style="width: 20rem">
    <div class="card-header bg-dark text-center rounded-0">
          <svg xmlns="http://www.w3.org/2000/svg" width="3rem" height="3rem" fill="currentColor" class="bi bi-person-circle " viewBox="0 0 16 16">
           <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
           <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
           </svg>
           <h5 class="text-white ">Log In</h5>

        </div>
    <div class="card-body form login">
      
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input text-black mb-3">
        <label for="email" class="form-label">Email Address</label>

          <input type="text" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="field input text-black mb-3">
        <i class="fas fa-eye text-black"></i>
        <label for="password" class="form-label">Password</label>

          <input type="password" name="password" placeholder="Enter your password" required>

        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="text-center text-black">
                <p>Do not have an Account?</p>
                <a href="signup.php">Register Here</a>

            </div>
      </form>
      
    </div>
    </div>
    
  </div>
  

<script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

</html>
<?php
require 'constants/footer.php';
 ?>
