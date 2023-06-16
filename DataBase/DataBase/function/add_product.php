<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$stock = $_POST['stock'];
	$description = $connect->real_escape_string($_POST['description']);
	$category = $_POST['category'];
	$date = date("Y-m-d");

	$img_name = $_FILES['image']['name'];
	$img_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($img_temp, "images/$img_name");
	$insert_product = "INSERT INTO products( name_product, image_product, description_product, price_product, discount_product,cat_id,  c_date, stock) VALUES ('$name','$img_name','$description','$price','$discount', $category,'$date',$stock)";
	$connect->query($insert_product);
	header("Location: ../products.php");



}

?>