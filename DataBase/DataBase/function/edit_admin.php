<?php 
if(isset($_POST['submit'])){
include 'connection.php';
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$img_name = $_FILES['image']['name'];
$img_temp = $_FILES['image']['tmp_name'];
move_uploaded_file($img_temp, "images/$img_name");

if(!empty($img_name)){
	$update_image = "UPDATE admin SET image = '$img_name' WHERE id = $id";
	$connect->query($update_image);
}


$update_admin = "UPDATE admin SET username = '$username', password = '$password' WHERE id =  $id";
$connect->query($update_admin);
header("Location:../index.php");

}


?>