<?php 
$id = $_GET['id'];
$select_one_pro = "SELECT * FROM products WHERE id = $id";
$result_one_pro = $connect->query($select_one_pro);
$row_one_pro = $result_one_pro->fetch_assoc();

?>
<form class="form-group" action="function/edit_product.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="text" name="name" value="<?php echo $row_one_pro['name_product']; ?>" class="form-control"><br>
	<input type="text" name="price"  value="<?php echo $row_one_pro['price_product']; ?>" class="form-control"><br>
	<input type="text" name="discount" value="<?php echo $row_one_pro['discount_product']; ?>" class="form-control"><br>
	<input type="number" name="stock" value="<?php echo $row_one_pro['stock']; ?>" class="form-control"><br>
	<select name="category" class="form-control">
		<option selected="" disabled="">Choose Category</option>
<?php 
$select_all_category = "SELECT * FROM categories";
$result_all_category = $connect->query($select_all_category);
foreach ($result_all_category as $key_category) {

?>
        <option value="<?php echo $key_category['id']; ?>"><?php echo $key_category['name_cat']; ?></option>
<?php } ?>		
	</select><br>
	<img style="width: 200px; height: 200px;" src="function/images/<?php echo $row_one_pro['image_product']; ?>">
	<input type="file" name="image"><br>
	<label>Description:</label>
	<textarea name="description" class="form-control"><?php echo $row_one_pro['description_product']; ?></textarea><br>
	<input type="submit" name="submit" class="btn btn-info" value="EDIT">
</form>