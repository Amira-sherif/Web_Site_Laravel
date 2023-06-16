<?php
include 'connection.php';
$id = $_GET['id'];
$delete_admin = "DELETE FROM admin WHERE id = $id";
$connect->query($delete_admin);
header("Location:../index.php");

 ?>