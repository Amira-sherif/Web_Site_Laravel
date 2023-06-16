<a href="?do=add" class="btn btn-warning">Add_New_Admin</a>
<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
													<thead>
				      
				      	<th>#</th>
				        <th>Username</th>
				        <th>Image</th>
				        <th>Control</th>
                
                
													</tr>
												</thead>
								<tbody>
								<?php 
$index = 1;
$select_all_admin = "SELECT * FROM admin";
$result_all_admin = $connect->query($select_all_admin);
while($row_admin = $result_all_admin->fetch_assoc()){
?>	
		
													<tr>
														<td><?php echo $index++; ?></td>
														<td><?php echo $row_admin['username']; ?></td>
														
				        <td><img style="width: 100px;height: 100px;" src="function/images/<?php echo $row_admin['image']; ?>"></td>
                <td><a href="?do=edit&id=<?php echo $row_admin['id']; ?>" class="btn btn-primary">Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_admin['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_admin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete Admin:<span style="color: red;"> <?php echo $row_admin['username']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_admin.php?id=<?php echo $row_admin['id']; ?>" class="btn btn-danger">Delete</a>
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
										