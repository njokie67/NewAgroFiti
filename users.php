<?php 
error_reporting(0);
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
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
  <title>chat page</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylee.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<style>
  .card{
    background-color: #fff;
  }
  .body{
    background-image: url("chat.jpg");
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
  

</style>
</head>
<body style="background-image: url('chat.jpg');">
  <div class="container mt-3 mb-2">
    <div class="card mx-auto bg-light" style="width: 25rem">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="" class="rounded-circle">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
    </div>
    
  </div>

  <script src="javascript/users.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>
</html>

<?php
require 'constants/footer.php';
 ?>

