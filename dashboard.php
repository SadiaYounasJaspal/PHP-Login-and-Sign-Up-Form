   
 <?php
include 'connection.php';
session_start();
 $conn = OpenCon();

if(!isset($_SESSION['email']))
{
  header("Location: index.php");
  exit();
}
$email = $_SESSION['email'];

$sql1 = "SELECT first_name, last_name,cnic,DOB,phone_number,gender,file_name FROM  `users` WHERE email = '" . $email . "';";

$result1 = mysqli_query($conn , $sql1);
$data1 = mysqli_fetch_assoc($result1);
$first_name= $data1['first_name'];
$last_name= $data1['last_name'];
$cnic= $data1['cnic'];
$DOB= $data1['DOB'];
$phone_number= $data1['phone_number'];
$gender= $data1['gender'];
$file_name98= $data1['file_name'];
 ?>    

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Web Development</title>
</head>
<link rel="stylesheet" href="css/style.css"> 

<style>
body {

  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
</style>
<body  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">	

	 <div class="topnav" id="myTopnav">
  <a href="dashboard.php">Profile</a>
  <a href="#p1">PAGE 1</a>
  <a href="#p2">PAGE 2</a>
  <a href="#p3">PAGE 3</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


 <button type="button" style="float: right;position: absolute;right:30px;" class="btn1" onclick="window.location.href = 'logout.php';">Logout </button>   
<br> <br><br>
 <div class="style_page">
         <h2>MY PROFILE </h2>
         <font ><b>NAME:</b> &emsp;</font>
 <?php  echo $first_name; echo " " ?>
<?php echo $last_name;  ?> <br>
  <font><b>CNIC:</b> &emsp;</font>
<?php echo $cnic;  ?>  <br>
  <font><b>DATE OF BIRTH:</b> &emsp;</font>
<?php echo $DOB;  ?><br>
  <font><b>PHONE NUMBER:</b> &emsp;</font>
 <?php echo $phone_number;  ?><br>
  <font><b>GENDER:</b> &emsp;</font>
 <?php echo $gender; echo "<br>" ?> 
 <?php echo "<Image src='uploads/" . $file_name98 . "' style='width: 20%; height: 20%'></Image>"; ?>
 
</div>
</body>


<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

   window.history.forward(); 
function noBack() {
  window.history.forward();
}

</script>
</html>
