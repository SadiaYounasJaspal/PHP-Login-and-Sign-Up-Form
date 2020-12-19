 <?php
function OpenCon() //Open Connection
{
	$servername = "localhost";
	$username1 = "root";
	$password1 = "";
	$database1 = "post_1";
	// Create connection
	$conn = mysqli_connect($servername, $username1, $password1, $database1);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}
function CloseCon($conn)  //Close Connection
{
	mysqli_close($conn);
}
?>
