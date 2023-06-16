<?php

$id = $_GET['id'];
$select_one_user = "SELECT * FROM user WHERE id = $id";
$result_one_user = $connect->query($select_one_user);
$row_one_user = $result_one_user->fetch_assoc(); 
?>
<form class="form-group" action="function/edit_user.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<label>FirstName:</label>
	<input type="text" name="firstname" value="<?php echo $row_one_user['first_name']; ?>" class="form-control"><br>
	<label>LastName:</label>
	<input type="text" name="lastname" value="<?php echo $row_one_user['last_name']; ?>" class="form-control"><br>
	<label>Password:</label>
	<input type="text" name="password" value="<?php echo $row_one_user['password']; ?>" class="form-control"><br>
	<label>Address:</label>
	<input type="text" name="address" value="<?php echo $row_one_user['address']; ?>" class="form-control"><br>
	<label>phone:</label>
	<input type="text" name="phone" value="<?php echo $row_one_user['phone']; ?>" class="form-control"><br>
	<label>email:</label>
	<input type="email" name="email" value="<?php echo $row_one_user['email']; ?>" class="form-control"><br>
	<input type="submit" name="submit" class="btn btn-info" value="Edit">
</form>