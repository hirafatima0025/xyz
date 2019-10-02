<?php

session_start();
if ( $_SESSION['user'] == 'admin' ) {


session_destroy();
header("location:admin/login.php");

}

if ( $_SESSION['user'] == 'student' ) {

session_destroy();
header("location:login.php");

}

if ( $_SESSION['user'] == 'teacher' ) {

session_destroy();
header("location:login.php");

}


?>
