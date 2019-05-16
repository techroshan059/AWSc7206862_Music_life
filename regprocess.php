<?php

if(isset($_POST['submit']))
{
include('config/config.php');
$username=$_POST['username'];
$password=md5($_POST['password']);
$email=$_POST['email'];



$sqlch="SELECT * from users WHERE username='$username' and email='$email'";
$qrych=mysqli_query($conn, $sqlch);
$countch=mysqli_num_rows($qrych);
if($countch<=0)
{


$sql="INSERT INTO users (username, password, email,isadmin )VALUES ('$username', '$password', '$email','0')";
$qry=mysqli_query($conn, $sql);
if($qry)
	{
header('Location: login.php');
	}
	else
	{
		echo 'Data Not Inserted.<a href="registration.php">Try Again</a>';
	}
}
else
{
	echo "User or Email Already Exist";
}
}
else
{
	header('Location: login.php');
}
?>