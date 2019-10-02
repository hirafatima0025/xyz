<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'eduplus';

// mysqli_connect(hostname, username, pass, database )


// Create connection
$con = mysqli_connect($host, $username, $password, $dbname);


// Check connection
if (!$con) {
   echo 'Error';
}



?>
