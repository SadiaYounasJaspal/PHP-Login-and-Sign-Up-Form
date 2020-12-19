<?php

include 'connection.php';
$conn = OpenCon();



$trn_date = date("Y-m-d H:i:s");
$first_name  = $_POST['first_name'];
$last_name = $_POST['last_name'];



$cnic  = $_POST['cnic'];
$email = $_POST['email'];
$DOB  = $_POST['DOB'];

$phone_number  = $_POST['phone_number'];
$gender = $_POST['gender'];
$password  = $_POST['password'];
$retype_password  = $_POST['retype_password'];


$sql_2 = "SELECT * FROM  `users` WHERE email = '" . $email . "' and  cnic = '" . $cnic . "'  and  phone_number = '" . $phone_number . "';";
$result_2 =  mysqli_query($conn,$sql_2);

if($row_2 = mysqli_num_rows($result_2)>0)
{

	header("Location: signup.php?required_error_2=2");
	exit();
}



$sql_3 = "SELECT * FROM  `users` WHERE email = '" . $email . "'  and  phone_number = '" . $phone_number . "';";
$result_3 =  mysqli_query($conn,$sql_3);

if($row_3 = mysqli_num_rows($result_3)>0)
{

	header("Location: signup.php?required_error_3=3");
	exit();
}


$sql_4 = "SELECT * FROM  `users` WHERE email = '" . $email . "' and  cnic = '" . $cnic . "' ;";
$result_4 =  mysqli_query($conn,$sql_4);


if($row_4 = mysqli_num_rows($result_4)>0)
{

	header("Location: signup.php?required_error_4=4");
	exit();
}


$sql_5 = "SELECT * FROM  `users` WHERE   phone_number = '" . $phone_number . "'   and  cnic = '" . $cnic . "' ;";
$result_5 =  mysqli_query($conn,$sql_5);

if($row_5 = mysqli_num_rows($result_5)>0)
{

	header("Location: signup.php?required_error_5=5");
	exit();
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////


$sql6 = "SELECT * FROM  `users` WHERE email = '" . $email . "' ;";
$result6  =  mysqli_query($conn,$sql6);

if($row6 = mysqli_num_rows($result6)>0)
{

	header("Location: signup.php?required_error_6=6");
	exit();
}


$sql7 = "SELECT * FROM  `users` WHERE cnic = '" . $cnic . "' ;";
$result7  =  mysqli_query($conn,$sql7);

if($row7 = mysqli_num_rows($result7)>0)
{
     header("Location: signup.php?required_error_7=7");
	exit();
}


$sql8 = "SELECT * FROM  `users` WHERE phone_number = '" . $phone_number . "' ;";
$result8 =  mysqli_query($conn,$sql8);

if($row8 = mysqli_num_rows($result8)>0)
{
     header("Location: signup.php?required_error_8=8");
	exit();
}



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if( empty($first_name) || (!preg_match("/^[a-zA-Z ]*$/",$first_name) ) ||  strlen($first_name)<3 || strlen($first_name) > 20)
{

header("Location: signup.php?required_error_9=9");
	exit();
}


if( empty($last_name) ||  (!preg_match("/^[a-zA-Z ]*$/",$last_name) ) ||  strlen($last_name)<3 || strlen($last_name) > 20  )
{

header("Location: signup.php?required_error_10=10");
	exit();

}



if( empty($cnic) || (!preg_match("/^\d{5}-\d{7}-\d{1}$/",$cnic) )  )
{

 header("Location: signup.php?required_error_11=11");
	exit();
}

if( empty($email) || (!preg_match("/([a-zA-Z0-9]+)([\.{1}])?([a-zA-Z0-9]+)\@gmail([\.])com/",$email) ) )
{

header("Location: signup.php?required_error_12=12");
	exit();
}

if( empty($DOB) )
{


header("Location: signup.php?required_error_13=13");
	exit();

}
if( !empty($DOB) )
{
      $now = time();
      $dob = strtotime($DOB);
      $difference = $now - $dob;
       $age = floor($difference / 31556926);

if($age<18 || $age>120){
header("Location: signup.php?required_error_14=14");
	exit();
}

}


if( empty($phone_number) || (!preg_match("/92-[0-3]{3}-[0-9]{7}/",$phone_number) ) )
{

header("Location: signup.php?required_error_15=15");
	exit();

}

if( empty($gender) )
{

header("Location: signup.php?required_error_16=16");
	exit();

}


if( empty($password) || strlen($password)<8  || strlen($password)>15 )
{

header("Location: signup.php?required_error_17=17");
	exit();

}
if( empty($retype_password) || strlen($retype_password)<8  || strlen($retype_password)>15  || $password!=$retype_password )
{

header("Location: signup.php?required_error_18=18");
	exit();

}

$sql = "insert into users(trn_date,first_name,last_name,cnic,email,DOB,phone_number,gender,password,retype_password)
                 values ('$trn_date','$first_name','$last_name','$cnic','$email','$DOB','$phone_number','$gender',
                  '".md5($password)."',   '".md5($retype_password)."')";

 $result  =  mysqli_query($conn,$sql);


 $query_id = "SELECT id FROM  `users` WHERE email = '".$email."' ;";
$result_id = mysqli_query($conn , $query_id);
$data_id = mysqli_fetch_assoc($result_id);
$id_user= $data_id['id'];

// File upload path
$targetDir = "uploads/";


$fileName = basename($_FILES["file"]["name"]); // file name only because of basename fucntion
$fileType = pathinfo($fileName,PATHINFO_EXTENSION); // pathinfo(path, options) PATHINFO_EXTENSION - return only extension
 $fileName = pathinfo($fileName, PATHINFO_FILENAME); 
  $fileName = $fileName.'_'.$id_user.'.'.$fileType;

$targetFilePath = $targetDir . $fileName;



if(!empty($_FILES["file"]["name"]))
{
    // Allow certain file formats
    $allowTypes = array('jpg');
    if(in_array($fileType, $allowTypes))
    {
    	 
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) //moves an uploaded file to a new destination.
        {
          
              
        }  
    }
   else
    {
       $sql_del="Delete from users WHERE email = '" . $email . "';";
 $result_d  =  mysqli_query($conn,$sql_del);

       // $statusMsg = 'Sorry, only JPG files are allowed to upload.';
    	  header("Location: signup.php?required_error_19=19");
	exit();
    }
}


else{
  header("Location: signup.php?required_error_20=20");
	exit();
}

$sql_f="UPDATE users SET age='".$age."'  WHERE email = '" . $email . "';";
 $result_f  =  mysqli_query($conn,$sql_f);

$sql_1 = "UPDATE users SET file_name='".$fileName."'  WHERE email = '" . $email . "';";

$result_1  =  mysqli_query($conn,$sql_1);

 if ($result_1)
 {

  header("Location: welcome.html");
 }
 else{
  
  echo "problem in insertion of data<br>";
    echo "$conn->error()";
  
 }



CloseCon($conn);
echo "connection closed"
?>