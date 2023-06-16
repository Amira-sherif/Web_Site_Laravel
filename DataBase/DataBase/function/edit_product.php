<?php 
if(isset($_POST['submit'])){
	include 'connection.php';
	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$discount = $_POST['discount'];
	$stock = $_POST['stock'];
	$description = $connect->real_escape_string($_POST['description']);
	$category = $_POST['category'];

	$img_name = $_FILES['image']['name'];
	$img_temp = $_FILES['image']['tmp_name'];
	move_uploaded_file($img_temp, "images/$img_name");

	if(!empty($img_name)){
	$update_image = "UPDATE products SET image_product = '$img_name' WHERE id = $id";
	$connect->query($update_image);
}

	$update_product = "UPDATE products SET name_product='$name',description_product='$description',price_product='$price',discount_product='$discount',cat_id= $category, stock=$stock WHERE id = $id";
	$connect->query($update_product);
	header("Location:../products.php");

}