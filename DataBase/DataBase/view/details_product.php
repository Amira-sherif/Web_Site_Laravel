<?php 
$id = $_GET['id'];

$select_one_product = "SELECT * FROM products WHERE id = $id";
$result_one_product = $connect->query($select_one_product);
$row_one_product = $result_one_product->fetch_assoc();
$id_cat = $row_one_product['cat_id'];
//----------------------------
$select_cat = "SELECT name_cat FROM categories WHERE id = $id_cat";
$result_cat = $connect->query($select_cat);
$row_cat = $result_cat->fetch_assoc();


?>
<table>
	<tr>
		<th>ProductName:</th>
		<td><?php echo $row_one_product['name_product']; ?></td>
	<tr>
	<tr>
		<th>Price:</th>
		<td><?php echo $row_one_product['price_product'];?></td>
	</tr>

	<tr>
		<th>Discount:</th>
		<td><?php echo $row_one_product['discount_product'];?></td>
	</tr>
	<tr>
		<th>Stock:</th>
		<td><?php echo $row_one_product['stock'];?></td>
	</tr>
		<tr>
	<th>Description:</th>
		<td><?php echo $row_one_product['description_product'];?></td>
	</tr>

	<tr>
		<th>Category:</th>
		<td><?php echo $row_cat['name_cat']; ?></td>
	</tr>

	<tr>
		<th>Image:</th>
		<td><img style="width: 200px;height: 200px;" src="function/images/<?php echo $row_one_product['image_product']; ?>"></td>
	</tr>

</table>
<a href="products.php" class="btn btn-primary">Back</a>
