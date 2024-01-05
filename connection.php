<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="Form";
//creating connection
$conn=mysqli_connect($hostname,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed" .mysql_connect_error());
}
if(isset($_POST['save']))
{
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	$Phone=$_POST['Phone'];

	$sql_query= "INSERT INTO AJ(Email,Password,Phone) 
			values('$Email','$Password','$Phone')";

	if(mysqli_query($conn,$sql_query))
	{
		echo "FORM SUBMITTED SUCCESSFULLY";
	}
	else
	{
		echo "error:";
	}

	mysqli_close($conn);
	header('location:Sign-up.php');
}

?>