<?php
include 'connection.php';
$conn = OpenCon();

session_start();

$email = $_POST['email'];
$email = mysqli_real_escape_string($conn,$email);

$password=$_POST['password'];
$password = mysqli_real_escape_string($conn,$password);


  $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."' ";


 $result  =  mysqli_query($conn,$query) or die(mysql_error());
$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
	    header("Location: dashboard.php");
         }
         else{ 
         	header("Location: index.php?required_error_1=1");
	         exit();
  }

CloseCon($conn);
echo "connection closed"
?>