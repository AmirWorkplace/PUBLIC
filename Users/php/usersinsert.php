<?php
     include_once "config.php";
     session_start();
  if(isset($_SESSION['unique_id'])){

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $des = mysqli_real_escape_string($conn, $_POST['des']);
     // validation 
   if(!empty($title) && !empty($des)){
    
                                $insert_query = mysqli_query($conn, "INSERT INTO new (title, des)
                                 VALUES ('{$title}','{$des}')");
                               if($insert_query){                             echo "success";
                                  
                            }else{
                                echo "not inserted";
                            }}
                          else{
     echo "All input fields are required!";
     } }else{
       echo "Somthing went wrong!";
     }
?>
<?php
 
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    echo $output;
?>
