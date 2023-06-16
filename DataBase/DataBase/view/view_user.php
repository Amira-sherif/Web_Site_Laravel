
<a href="?do=add" class="btn btn-warning">Add_New_user</a>
<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
													<thead>
				      
				      	<th>#</th>
				        <th>FirstName</th>
				        <th>LastName</th>
				        <th>Control</th>
                
                
													</tr>
												</thead>
								<tbody>
								<?php 
$index = 1;
$select_all_user = "SELECT * FROM user";
$result_all_user = $connect->query($select_all_user);
while($row_user = $result_all_user->fetch_assoc()){
?>	
		
													<tr>
														<td><?php echo $index++; ?></td>
														<td><?php echo $row_user['first_name']; ?></td>
                                                        <td><?php echo $row_user['last_name']; ?></td>
                <td><a href="?do=edit&id=<?php echo $row_user['id']; ?>" class="btn btn-primary">Edit</a>
				<td><a href="?do=details&id=<?php echo $row_user['id']; ?>" class="btn btn-primary">View Details</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_user['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_user['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete user:<span style="color: red;"> <?php echo $row_user['first_name'].$row_user['last_name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_user.php?id=<?php echo $row_user['id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
													</td>
                       
													</tr>
                      
													<?php } ?>		
										</tbody>
											</table>
                      
                      </div>
							    	</div>
									</section>
								</div>
								
				</section>
			</main>
		</div>
	</div>      
										