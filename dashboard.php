
<!doctype html>
<html>
<head>
<title>Dashboard</title>
	<meta charset="utf-8"/>
	<meta name="author" content="name" />
</head>
<body>

	<h1>All Users</h1>

<?php

include_once('config/config.php');

$sql="SELECT * FROM users";

$qry=mysqli_query($conn, $sql);

echo "<table border=1>";
echo "<tr>";
echo "<td>UID</td><td>Username</td><td>Password</td><td>Email</td><td>Status</td><td>Functions</td></tr>";

while($row=mysqli_fetch_array($qry))
{
	$id=$row['id'];
	$password=$row['password'];
	$username=$row['username'];
	$email=$row['email'];
	$status=$row['status'];

echo "<tr><td>$id</td><td>$username</td><td>$password</td><td>$email</td><td>$status</td><td><a href='edit.php?id=$id'
>Edit</a> |<a href='delete.php?id=$id'>Delete</a></td></tr>";
}

echo "</table>";
	?>
</body>
</html>