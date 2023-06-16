
<form class="form-group" action="function/add_user.php" method="post">
	<input type="text" name="firstname" placeholder="FirstName" class="form-control"><br>
	<input type="text" name="lastname" placeholder="LastName" class="form-control"><br>
	<input type="password" name="password" placeholder="Password" class="form-control"><br>
	<input type="email" name="email" placeholder="Email" class="form-control"><br>
	<input type="text" name="address" placeholder="Address" class="form-control"><br>
	<input type="text" name="phone" placeholder="Phone" class="form-control"><br>
	<select name="gender" class="form-control">
		<option selected="" disabled="">Choose Gender</option>
		<option value="1">Female</option>
		<option value="0">Male</option>
	</select>
	<br>
	
	<input type="submit" name="submit" class="btn btn-info" value="ADD">
</form> 