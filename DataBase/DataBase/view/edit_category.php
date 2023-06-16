<?php

$id = $_GET['id'];
$select_one_category = "SELECT name_cat FROM categories WHERE id = $id";
$result_one_category = $connect->query($select_one_category);
$row_one_category = $result_one_category->fetch_assoc(); 
?>
<form class="form-group" action="function/edit_category.php" method="post">
	<input type="hidden" name="id" value="<?php echo  $id; ?>">

	<input type="text" class="form-control" name="category" value="<?php echo $row_one_category['name_cat']; ?>"><br>
	
	<input type="submit" name="submit" class="btn btn-info" value="Edit">
</form>