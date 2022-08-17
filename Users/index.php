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
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.debug.js"></script> -->
</body>
<section class="main_section signup">
  <div class="container">
   <div class="content">
    <form action="#" method="POST">
      <!-- <label for="">First Name</label> -->
      <label for="">First Name</label>
      <input type="text" placeholder="First Name" name="fname">
      <label for="">Last Name</label>
      <input type="text" placeholder="Last Name" name="lname">
      <label for="">Email</label>
      <input type="email" placeholder="Enter a new Email" name="email">
      <label for="">Password</label>
      <input type="password" placeholder="Enter a new Password" name="password">
      <label for="">Select Image</label>
      <input class="file" type="file" placeholder="Select Image" name="image">  
      <input class="submit_btn" type="submit" value="Signup now">
    </form>
    <div class="bottom_btn">
      <div class="link">Already signeup? <a href="login.php">Login now</a></div>
    </div>
   </div>
  </div>
</section>


  <!-- <input type="text" id="inputText">
  <button id="inputField"> Click Me to Input Field Value </button>

  <section class="DownloadAndView"></section>
<button onclick="convert()">Click to Download PDF </button> -->

<script>

// // document.getElementById("inputField").addEventListener("input", function first(e){
// //   let firstI = e.target.value;
// //   console.log(firstI);
// //   return first();
// // });

// let inputText = document.getElementById("inputText");
// let inputFiledButton = document.getElementById("inputField");

// inputFiledButton.addEventListener("click", ()=>{
//  let txt = inputText.value;
//  console.log(txt);





//     let users = [
  
//       {name: "Name", age:19},
//       {name: "John", age:24}
  
//    ];


  
//       // inset this object pdf Document
  
//       function convert(){ 
//     var doc = new jsPDF();
//       users.forEach(function(user,i){
//       // insert each user
//       doc.text(50,10+ i*10, "Name:" + txt + " "+ a1 + user.name + "Age: " + user.age + "\n");
//       // save this document
//       doc.save("output.pdf");
//   });
//   };

// });
console.log("hello");
   </script>

<script src="javaScript/signup.js"></script>

</html>