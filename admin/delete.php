<?php
include_once 'includes/header.php'
?>

<?php

$id = $_GET['id'];

$query = "DELETE FROM teachers WHERE id = '$id'";
$delete = mysqli_query($con, $query);

if ($delete) {
	header("Location: all-teacher.php");
}

?>
