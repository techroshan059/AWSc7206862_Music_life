<?php

//database
$db['hostname']='localhost';
$db['username']='root';
$db['password']='';
$db['database']='AWSc7206862_Music_db';
$db['dbdriver']='mysql';

$conn = mysqli_connect($db['hostname'], $db['username'], $db['password'], $db['database']);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	return;
  }