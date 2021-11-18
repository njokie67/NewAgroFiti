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
  <title>chat</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/stylee.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<style>
  /* .body{
    background-image: url("chat.jpg");
        background-repeat: no-repeat;
        background-size: cover;
  } */
  /* body::after{
    content: "";
    width: 100%;
    height: 100%;
    position:absolute;
    top: 0;
    left:0;
    background-color: rgba(21, 20, 51, 0.6);
    z-index: -1;
 }
   */
   .tel:hover{
    color: #ffc107;
   }
  
</style>
</head>
<body class="bg-light">
  <div class="container mt-3 mb-2">
    <div class="card mx-auto bg-light rounded" style="width: 25rem;">
    <section class="chat-area bg-light">
      <header class="bg-dark rounded">
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon bck"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="" class="rounded-circle">
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box bg-light">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button class="bg-dark tel"><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>

    </div>
    
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>

</html>
<?php
require 'constants/footer.php';
 ?>
