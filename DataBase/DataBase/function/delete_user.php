<?php
include 'connection.php';
$id = $_GET['id'];
$delete_user = "DELETE FROM user WHERE id = $id";
$connect->query($delete_user);
header("Location:../users.php");
 ?>