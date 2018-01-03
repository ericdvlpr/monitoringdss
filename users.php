<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          				<h1 class="page-header">Users</h1>
			          	<div class="btn-group">
			          		<button type="button" name="add" class="btn btn-success btn-sm pull-left" id='addUser'><span class="glyphicon glyphicon-plus"></span></button>
			          	</div>
			          	
			          	<table class="table table-striped">
			          			<tr>
			          				<td>#</td>
			          				<td>Username</td>
			          				<td>Access</td>
			          			</tr>
			          			<?php 
			          				$query = "SELECT * FROM users WHERE access != 0 ";
								  		$result = $object->execute_query($query);   
								           while($row = mysqli_fetch_object($result))  
								           { 
								           	echo "<tr>
							          				<td>".$row->id."</td>
							          				<td>".$row->username."</td>
							          				<td>".$row->access."</td>
							          			</tr>";
											}
			          			 ?>
			          	</table>
			          
           </div>
     </div>  
</div> 
<div class="modal fade" id="myModalUsers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Users</h4>
      </div>
      <form class="form-horizontal" id="usersform" method="POST">
	      <div class="modal-body">
			    <div class="form-group">
			    	 <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			    	
					<div class="col-sm-10">
						<input name="username" id="username" class="span4 form-control" type="text" required="required"></input>
					</div>
			   	</div>
				<div class="form-group">
			    	 <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
			    	
					<div class="col-sm-10">
						<input name="password" name="password" class="span4 form-control" type="password" required="required"></input>
					</div>
			   	</div>
			   	<div class="form-group">
			    	 <label for="inputEmail3" class="col-sm-2 control-label">Access</label>
			    	
					<div class="col-sm-10">
						<select name="access" class="form-control">
							<option value="">Please Select</option>
							<option value="">Please Select</option>
							<option value="">Please Select</option>
						</select>
					</div>
			   	</div>			
				<input type="hidden" name="action" id="action" value="addUsers" />
		        <input type="hidden" name="user_id" id="user_id" />
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
			      </div>		
			    </div>  
	      </div> 
<?php 
include 'includes/footer.php';
?>
