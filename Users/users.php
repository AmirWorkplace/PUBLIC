<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>This is User Page</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<section>
<div class="container_user">
<header>
        <div class="users">
          <?php 
          include_once "php/config.php";
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img class="user_img" src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a class="logoutbtn" href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>  
</div>
</section>
<!-- User and Chat  -->
<section class="main_section users">

  <div class="container">
   <div class="content">
    <form action="#" method="POST"> 
      <label for="">Enter Title</label>
      <input type="text" placeholder="Title" name="title">
      <label for="">Enter Description</label>
      <input type="text" placeholder="Description" name="des">
 
      <input class="submit_btn" type="submit" value="Submit">
    </form>
   </div>
  </div>
</section> 

<script src="javaScript/users.js"></script> 
</body>
</html>