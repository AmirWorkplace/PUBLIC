
<?php
// www.github.com/AmirWorkplace
session_start();
$session = $_SESSION['unique_id'];
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','cv');
$res=mysqli_query($con, "SELECT * FROM `new` WHERE `unique_id` = $session");

if(isset($session)){
  if (mysqli_num_rows($res) > 0) {
    $html = '<style></style><table class="table">';
    $html .= '<tr><td>ID</td><td>Title</td><td>Description</td></tr>';
    while ($row = mysqli_fetch_assoc($res)) {
      $html .= '<tr><td>' . $row['id'] . '</td><td>' . $row['title'] . '</td><td>' . $row['des'] . '</td></tr>';
    }
    $html .= '</table>';
  } else {
    $html = "Data not found";
  }
  echo $html;
}else{
  echo "Please Create a user id and see your Data!";
}


// $mpdf=new \Mpdf\Mpdf();
// $mpdf->WriteHTML($html);
// $file='media/'.time().'.pdf';
// $mpdf->output($file,'I');
//D
//I
//F
//S
?>