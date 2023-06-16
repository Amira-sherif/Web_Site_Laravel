<?php
include 'connection.php';
$id = $_GET['id'];
$delete_product = "DELETE FROM products WHERE id = $id";
$connect->query($delete_product);
header("Location:../products.php");

 ?>