<?php

$id = $_GET['id'];
$select_one_admin = "SELECT * FROM admin WHERE id = $id";
$result_one_admin = $connect->query($select_one_admin);
$row_one_admin = $result_one_admin->fetch_assoc(); 
?>
<form class="form-group" action="function/edit_admin.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>UserName:</label>
	<input type="text" name="username" value="<?php echo $row_one_admin['username']; ?>" class="form-control"><br>
	<label>Password:</label>
	<input type="text" name="password" value="<?php echo $row_one_admin['password']; ?>" class="form-control"><br>
	<img style="width: 200px;height:200px;" src="function/images/<?php echo $row_one_admin['image']; ?>"><br>
	
	<input type="file" name="image"><br>
	<input type="submit" name="submit" class="btn btn-info" value="Edit">
</form>