<?php

$showerror_1=false;
if(isset($_GET['required_error_1']))
{
  $showerror_1=true;
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Web Development</title>
</head>

 <link rel="stylesheet" href="css/style.css">  
<style type="text/css">

</style>
<body class="body_style"  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">

	 <?php 

 if($showerror_1){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
  <strong>Alert!</strong>  TRY AGAIN! INVALID CREDENTIALS
</div>"; }

?>

<div class="box">
<h1>SIGN IN FORM</h1>

<form method="post" action="sign_in.php">

<input type="email" name="email" class="email" placeholder="enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required/> <br><br>

<input type="password" name="password"  class="email" placeholder="enter password"  min="8" max="15" required />
 <br><br> <br><br>

<input type="submit"  class="btn" name="Sign In" value="Sign In">
 <button type="button" class="btn1" onclick="window.location.href = 'signup.php';">Sign UP</button>
</form>

</div>
</body>


    <script type="text/javascript" language="javascript" src="js/script.js"></script>
          <script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

  
   window.history.forward(); 
function noBack() {
  window.history.forward();
}

</script> 

</html>
