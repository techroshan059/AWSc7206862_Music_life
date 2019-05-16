<?php include_once('includes/header.php') ?>
<?php
   session_start();
   $id=$_GET['id'];
	$sql="SELECT * from users WHERE id='$id'";
	include('config/config.php');
	$qry=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($qry))
	{
		$id=$row['id'];
		$username=$row['username'];
		$password=$row['password'];
		$email=$row['email'];
	}
?>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8"/>
	<meta name="web Assignment" content="yourname" />
</head>
<body>
	<form name="frmupdate" method="POST" action="">
		User ID<input type="text" name="uid" readonly value="<?php echo $id;?>"><br/>
		User Name<input type="text" name="uname" value="<?=$username?>"><br/>
		Password<input type="text" name="upass" value="<?=$password?>"><br/>
		Email<input type="email" name="uemail" value="<?=$email?>"><br/>
		<input type="submit" name="submit" value="update">

	</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$upass=$_POST['upass'];
	$uemail=$_POST['uemail'];
	include('config/config.php');
	$sql="UPDATE users
	SET
	username='$uname',
	password='$upass',
	email='$uemail'
	WHERE
	id='$uid'
	";
	$qry=mysqli_query($conn, $sql);
	if($qry)
	{
		header('Locaton: admin.php');

	}
	else
	{
		echo "Oops! Something Wrong";
	}
}
?>