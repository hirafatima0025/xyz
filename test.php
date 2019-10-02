<?php include 'includes/connection_home.php'; ?>

<?php
$sql = "SELECT * FROM teachers WHERE email = '$email' AND pass = '$pass'";
$select = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($select);
$_SESSION['teacher'] = $row['email'];

$sql1 = "SELECT * FROM students WHERE email = '$email' AND pass = '$pass'";
$select1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_assoc($select1);
$_SESSION['student'] = $row['email'];

$sql2 = "SELECT * FROM admin WHERE email = '$email' AND pass = '$pass'";
$select2 = mysqli_query($con, $sql2);
$row3 = mysqli_fetch_assoc($select2);
$_SESSION['admin'] = $row['email'];


if ($email == $_SESSION['teacher'] ) {
  // code...
} elseif ($email == $_SESSION['student']) {
  // code...
} elseif ($email == $_SESSION['admin']) {
  // code...
} else {
  // code...
}

 ?>
