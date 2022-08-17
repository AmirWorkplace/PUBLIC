<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main_section login">
        <div class="container">
         <div class="content">
          <form action="#" method="POST">
            <!-- <label for="">First Name</label> -->
        
            <label for="">Email</label>
            <input type="email" placeholder="Enter a new Email" name="email">
            <label for="">Password</label>
            <input type="password" placeholder="Enter a new Password" name="password">
            <input class="submit_btn" type="submit" value="Login now">
          </form>
          <div class="bottom_btn">
            <div class="link">Not yet signeup? <a href="index.php">Signup now</a></div>
          </div>
         </div>
        </div>
      </section>

      <script src="javaScript/login.js"></script>
      
</body>
</html>