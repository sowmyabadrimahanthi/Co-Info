<?php
$con=mysqli_connect("localhost","root","","covid");
// if($con){
//     echo "database connected";
// }
// else{
//     die(mysqli_connect_error());
// }

$f=$_POST["fname"];
$l=$_POST["lname"];
$e=$_POST["email"];
$p=$_POST["subject"];
$m=$_POST["message"];

$q = "INSERT INTO contact (fname, lname, email,phno,msg)
VALUES ('$f', '$l', '$e', '$p', '$m')";

if (mysqli_query($con, $q)) {
    echo "<h1 style='position:relative; top:20px;'><center>Recieved your messages. Will contact you soon !</center></h1>";
    echo '<center><img style="position:relative; top:40px;" height="400" src="images/ok.jpg" alt="icon" /></center>';
    echo '<center><h1><p style="position:relative; top: 50px;" class="mb-4"><a href="index.php" class="btn btn-primary">GO BACK TO HOME</a></p></h1></center>';
  } else {
    echo "Error: " . $q . "<br>" . mysqli_error($con);
  }
  
mysqli_close($con); 
?>