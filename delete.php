<?php
session_start();
include_once('config/config.php');
$id=$_GET['id'];
if(!empty($id))
{
$sql="DELETE FROM users WHERE id=$id";
$qry=mysqli_query($conn, $sql);
if($qry)
{
	header('Location: admin.php');
}
}
else
	{echo "Something Wrong";}
?>