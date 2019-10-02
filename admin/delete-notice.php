<?php
include_once '../includes/connection.php'
?>

<?php

$id = $_GET['id'];

$query = "DELETE FROM notices WHERE id = '$id'";
$delete = mysqli_query($con, $query);

if ($delete) {
  echo "Succesfully Deleted";
	header("Location: notice-board.php");
}

?>
