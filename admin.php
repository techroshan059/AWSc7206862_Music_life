<?php include_once 'includes/header.php'?>

<?php
include_once 'config/config.php';
$sql = "SELECT * FROM users";
$qry = mysqli_query($conn, $sql);
echo '<table  class="table table-dark">';
echo "<tr>";
echo "<td>Check All</td><td>UId</td><td>Username</td><td>Password</td><td>Email</td><td>isAdmin</td><td>Functions</td></tr>

<form name='bulk_action_form' action='action.php' method='post'>";
while ($row = mysqli_fetch_array($qry)) {
    $id = $row['id'];
    $password = $row['password'];
    $username = $row['username'];
    $email = $row['email'];
    $isadmin = $row['isadmin'];

    echo "<tr>
<td> <input type='checkbox' name='checked_id[]'value=" . $id . "></td>

<td>$id</td><td>$username</td><td>$password</td><td>$email</td><td>$isadmin</td><td>
<a href='edit.php?id=$id'>Edit</a>|

<a href='delete.php?id=$id'>Delete</a>
</td></tr>";

}

echo "<tr>";
echo "<td>
<input type='submit'  name='bulk_delete_submit' value='Delete'/>
</form>

</td><td>UId</td><td>Username</td><td>Password</td><td>Email</td><td>isAdmin</td><td>Functions</td></tr>";
echo "</table>";
?>