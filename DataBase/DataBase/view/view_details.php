<?php

$id = $_GET['id'];
$select_one_user = "SELECT * FROM user WHERE id = $id";
$result_one_user = $connect->query($select_one_user);
$row_one_user = $result_one_user->fetch_assoc(); 
?>


<form class="form-group" action="function/edit_user.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
<table class="table table-hover">
				    <thead>
				      <tr>
				      	<th>FirstName</th>
				        <th>LastName</th>
				        <th>Gender</th>
				        <th>Address</th>
						<th>Phone</th>
						<th>Email</th>
				      </tr>
				    </thead>
				    <tbody>
						
					<tr>
														
														<td><?php echo $row_one_user['first_name']; ?></td>
                                                        <td><?php echo $row_one_user['last_name']; ?></td>
														<td><?php if($row_one_user['gender']==0){echo "Male";}else{echo "Female";}; ?></td>
                                                        <td><?php echo $row_one_user['address']; ?></td>
														<td><?php echo $row_one_user['phone']; ?></td>
                                                        <td><?php echo $row_one_user['email']; ?></td>
</tr>		
<tr>
														
														<td>
<a href="users.php" class="btn btn-secondary">Back</a> 
</td>
                                                        
</tr>								
<tbody>		

</form>
