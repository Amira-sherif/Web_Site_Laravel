<?php 
if(isset($_POST['submit'])){
include 'connection.php';
$id = $_POST['id'];
$category = $_POST['category'];


$update_category = "UPDATE categories SET name_cat = '$category' WHERE id =  $id";
$connect->query($update_category);
header("Location:../categories.php");

}


?>