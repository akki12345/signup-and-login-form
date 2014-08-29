<?php
$con=mysqli_connect("localhost","root","","mobile");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

echo $name;
echo $email;
echo $password;
echo $repassword;



mysqli_query($con,"INSERT INTO phone (name , email, password, repassword) 
VALUES ('$name', '$email', '$password', '$repassword')");

mysqli_close($con);
?>