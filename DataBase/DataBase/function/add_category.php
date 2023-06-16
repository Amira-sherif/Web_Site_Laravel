<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$category = $_POST['category'];

	$insert_category = "INSERT INTO categories(name_cat)VALUES('$category')";
	$connect->query($insert_category);
	header("Location: ../categories.php");



}

?>