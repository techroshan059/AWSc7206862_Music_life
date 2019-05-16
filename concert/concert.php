<?php include 'db_connect.php';
$sql = "SELECT Band_id, BandName, Destination FROM Music";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["Band_id"]. " - Name: " . $row["BandName"]. " " ." - destination: " .  $row["Destination"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>