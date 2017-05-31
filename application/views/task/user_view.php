
	<?php
		// echo "<pre>";
		// print_r($value);
		// echo "</pre>";
	?>
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      	<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		<th>Option</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($userArray as $value):?>
    <tr>
      <td scope="row"><?php echo $value['id'];?></td>
		<td><?php echo $value['fname'];?></td>
		<td><?php echo $value['lname'];?></td>
		<td><?php echo $value['email'];?></td>
		<td><?php echo $value['username'];?></td>
		<td><?php echo $value['password'];?></td>
		<td> 
		<?php echo anchor("hello/get_id/{$value['id']}", " ",['class'=>'btn btn-info btn-sm glyphicon glyphicon-edit','title' => 'update']);?>
		<a href="delete/?id=<?php echo $value['id'];?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm glyphicon glyphicon-trash" title = "delete"></a>
		</td>
    </tr>
<?php endforeach;?>
  </tbody>
</table>
</div>

<!-- modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>