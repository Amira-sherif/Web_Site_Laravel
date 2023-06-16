<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	
	$username = $_POST['username'];
	$password = ($_POST['password']);

	$img_name = $_FILES['image']['name'];
	$img_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($img_temp, "images/$img_name");

	$insert_admin = "INSERT INTO admin (username,password,image)VALUES('$username' , '$password' ,'$img_name')";
	$connect->query($insert_admin);
	header("Location: ../index.php");
}
?>