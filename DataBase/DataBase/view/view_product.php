<a href="?do=add" class="btn btn-warning">Add New Product</a>

				<table class="table table-hover">
				    <thead>
				      <tr>
				      	<th>#</th>
				        <th>Name</th>
				        <th>Image</th>
				        <th>Control</th>
				      </tr>
				    </thead>
				    <tbody>
<?php 
$index = 1;
$select_all_product = "SELECT * FROM products";
$result_all_product = $connect->query($select_all_product);
while($row_product = $result_all_product->fetch_assoc()){
?>	
					<tr>
						<td><?php echo $index++; ?></td>
				        <td><?php echo $row_product['name_product']; ?></td>
				        <td><img style="width: 200px;height: 200px;" src="function/images/<?php echo $row_product['image_product']; ?>"></td>
				        <td><a href="?do=view&id=<?php echo $row_product['id']; ?>" class="btn btn-primary">View Details</a>
				        	<a href="?do=edit&id=<?php echo $row_product['id'];?>" class="btn btn-primary">Edit</a>
				        	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_product['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_product['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure To Delete product:<span style="color: red;"> <?php echo $row_product['name_product']; ?> </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_product.php?id=<?php echo $row_product['id']; ?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>
				        	

				        	</td>
				    </tr>
<?php } ?>				      


				      
				    </tbody>
  </table>