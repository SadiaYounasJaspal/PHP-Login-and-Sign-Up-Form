<?php

$showerror_1=false;
if(isset($_GET['required_error_1']))
{
  $showerror_1=true;
}

$showerror_2=false;
if(isset($_GET['required_error_2']))
{
  $showerror_2=true;
}

$showerror_3=false;
if(isset($_GET['required_error_3']))
{
  $showerror_3=true;
}
$showerror_4=false;
if(isset($_GET['required_error_4']))
{
  $showerror_4=true;
}





$showerror_5=false;
if(isset($_GET['required_error_5']))
{
  $showerror_5=true;
}

$showerror_6=false;
if(isset($_GET['required_error_6']))
{
  $showerror_6=true;
}

$showerror_7=false;
if(isset($_GET['required_error_7']))
{
  $showerror_7=true;
}



$showerror_8=false;
if(isset($_GET['required_error_8']))
{
  $showerror_8=true;
}

$showerror_9=false;
if(isset($_GET['required_error_9']))
{
  $showerror_9=true;
}


$showerror_10=false;
if(isset($_GET['required_error_10']))
{
  $showerror_10=true;
}

$showerror_11=false;
if(isset($_GET['required_error_11']))
{
  $showerror_11=true;
}




$showerror_12=false;
if(isset($_GET['required_error_12']))
{
  $showerror_12=true;
}


$showerror_13=false;
if(isset($_GET['required_error_13']))
{
  $showerror_13=true;
}
$showerror_14=false;
if(isset($_GET['required_error_14']))
{
  $showerror_14=true;
}


$showerror_15=false;
if(isset($_GET['required_error_15']))
{
  $showerror_15=true;
}

$showerror_16=false;
if(isset($_GET['required_error_16']))
{
  $showerror_16=true;
}

$showerror_17=false;
if(isset($_GET['required_error_17']))
{
  $showerror_17=true;
}

$showerror_18=false;
if(isset($_GET['required_error_18']))
{
  $showerror_18=true;
}

$showerror_19=false;
if(isset($_GET['required_error_19']))
{
  $showerror_19=true;
}
$showerror_20=false;
if(isset($_GET['required_error_20']))
{
  $showerror_20=true;
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Web Development</title>


  <link rel="stylesheet" href="css/style.css"> 

</head>

 
<body class="body_style"  onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
  <?php 
  if($showerror_2){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
  <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS EMAIL , CNIC & PHONE NUMBER. TRY AGAIN!
</div>"; }

if($showerror_3){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
  <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS EMAIL & PHONE NUMBER. TRY AGAIN!
</div>"; }

if($showerror_4){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
  <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS EMAIL & CNIC. TRY AGAIN!
</div>"; }

if($showerror_5){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
  <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS PHONE NUMBER & CNIC. TRY AGAIN!
</div>"; }


  if($showerror_6){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS EMAIL. TRY AGAIN!
</div>"; }

  if($showerror_7){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS CNIC. TRY AGAIN!
</div>"; }

  if($showerror_8){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> ACCOUNT ALREADY EXIST WITH THIS PHONE NUMBER. TRY AGAIN!
</div>"; }

  if($showerror_9){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid first name. TRY AGAIN!
</div>"; }

  if($showerror_10){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid last name. TRY AGAIN!
</div>"; }

  if($showerror_11){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid CNIC. TRY AGAIN!
</div>"; }

  if($showerror_12){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid EMAIL. TRY AGAIN!
</div>"; }

 if($showerror_13){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter DOB. TRY AGAIN!
</div>"; }

 if($showerror_14){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> YOU MUST BE OVER 18. TRY AGAIN!
</div>"; }

if($showerror_15){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter phone number in valid format. TRY AGAIN!
</div>"; }

if($showerror_16){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please Select GENGER. TRY AGAIN!
</div>"; }

if($showerror_17){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid password. TRY AGAIN!
</div>"; }

if($showerror_18){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please enter a valid retype password. TRY AGAIN!
</div>"; }

if($showerror_19){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Sorry, only JPG files are allowed to upload. TRY AGAIN!
</div>"; }

if($showerror_20){ echo "<div class='alert'>
  <span class='closebtn'>&times;</span>  
 <strong>Alert!</strong> Please Select upload an image. TRY AGAIN!
</div>"; }

?>
  <div class="box1">
  	<a href="index.php">Back to login page</a>
    <h1> Sign Up Form</h1>

    <form method="post" name="myForm" action="SignUp_insert.php" enctype="multipart/form-data" >

                 

    <label style="  margin-left:1px;"> FIRST NAME</label>      
    <input type="text" class="email" id="form_first_name" name="first_name" pattern="[A-Za-z]+" required/><br>
    <span class="error_form" id="first_name_error_message"></span>
                    <BR>        
     <label>LAST NAME</label> 
    <input type="text" class="email" id="form_last_name" name="last_name" pattern="[A-Za-z]+" required/><br>
        <span class="error_form" id="last_name_error_message"></span>
       <BR>

 <label style="margin-left: 50px">CNIC</label>
 <input id="form_cnic" class="email" onkeyup="addHyphen(this)"  name="cnic" type="tel" placeholder="xxxxx-xxxxxxx-x" required ><br>
 <span class="error_form" id="cnic_error_message"></span>
                         
 <br>
                         
 <label style="margin-left: 40px">EMAIL</label>
 <input type="email" class="email" id="form_email"  placeholder="Enter email" name="email" required><br>
 <span class="error_form" id="email_error_message"></span>
<span id="email_status"></span>
                         
 <br>

  <label style="margin-left: 50px">DOB</label> 

  <span class="error_form" id="dob_error_message"></span> <input type="date" name="DOB" class="email datepicker" id="form_dob" required> <br>
 
 <br><br>
                                
 <label style="margin-left: 30px">TEL NO</label>  
 <input type="tel" class="email" id="form_tel" name="phone_number" placeholder="92-xxx-xxxxxxx" required><br> 
 <span class="error_form" id="tel_error_message"></span>

 <br>
                          
<span class="error_form" id="gender_error_message"></span><label style="margin-left: 50px"> SELECT GENGER </label> 
<input type="radio" name="gender" id="form_gender" value="male"  required> Male      
<input type="radio" name="gender" id="form_gender" value="female" required> Female<br>


 <br>
                            
 <span class="error_form" id="file_error_message"></span><label>Select Image</label>
 <input type="file"class="email"  name="file" id="fileToUpload" required> <br>
 
<div class="empty-text">
Upload images
</div>

   
    

<label style="margin-left: 50px">Password</label> 
<input type="password" name="password" class="email" id="form_password" placeholder="Password"  required><br>
<span class="error_form" id="password_error_message"></span>
<br>

<label>Re-Type Password</label>
<input type="password" name="retype_password" class="email" id="form_retype_password" placeholder="Password" required><br>
<span class="error_form" id="retype_password_error_message"></span>
 <br>


  <input  id="form_error_required" type="submit"  class="btn"  value="submit"  >
  <input type="reset"  class="btn1"  value="reset">
    </form>

  </div>

</body>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>


        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

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
