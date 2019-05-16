<?php
session_start();
include('config/config.php');


if(isset($_POST))
{
	$email=$_POST['email']; 
	$password=md5($_POST['password']);
	include_once('config/config.php');
	$sql="SELECT * from users WHERE email='$email' AND password='$password' ";
	$qry=mysqli_query($conn, $sql);
	$count=mysqli_num_rows($qry);
	if($count==1)
	{
		while($row=mysqli_fetch_array($qry))
		{
			$isadmin=$row['isadmin'];
			$_SESSION['email']=$email;
			if($isadmin==1)
			{
				header('Location: admin.php');
			}
			else
			{
				header('Location: index.html');
				
			}
			
		}
	}
	else{
		header('Location: login.php');
	}
}

?>