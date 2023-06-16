<a href="?do=add" class="btn btn-warning">Add New Category</a>

				<table class="table table-hover">
				    <thead>
				      <tr>
				      	<th>#</th>
				        <th>Category</th>
				        <th>Control</th>
				      </tr>
				    </thead>
				    <tbody>
<?php 
$index = 1;
$select_all_category = "SELECT * FROM categories";
$result_all_category = $connect->query($select_all_category);
while($row_category = $result_all_category->fetch_assoc()){
;
?>	
					<tr>
						<td><?php echo $index++;?></td>
				        <td><?php echo $row_category['name_cat']; ?></td>
				        
				        <td><a href="?do=edit&id=<?php echo $row_category['id']; ?>" class="btn btn-primary">Edit</a>
				        	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_category['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_category['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete category:<span style="color: red;"> <?php echo $row_category['name_cat']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_category.php?id=<?php echo $row_category['id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
				        	

				        	</td>
				    </tr>
<?php } ?>				      


				      
				    </tbody>
  </table>