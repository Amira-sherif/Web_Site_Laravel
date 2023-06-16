
<form class="form-group" action="function/add_product.php" method="post" enctype="multipart/form-data">
	<input type="text" name="name" placeholder="Name Product" class="form-control"><br>
	<input type="text" name="price" placeholder="Price" class="form-control"><br>
	<input type="text" name="discount" placeholder="Discount" class="form-control"><br>
	<input type="number" name="stock" placeholder="stock" class="form-control"><br>
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
	<input type="file" name="image"><br>
	<label>Description:</label>
	<textarea name="description" class="form-control"></textarea><br>
	<input type="submit" name="submit" class="btn btn-info" value="ADD">
</form>