<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          				<h1 class="page-header">Residents</h1>
			          	<div class="btn-group">
			          		<a href="addResident.php" class="btn btn-success btn-sm pull-left" id='addUser'><span class="glyphicon glyphicon-plus">  </span> Add Resident</a>
			          	</div>
			          	<br />
			          	<table class="table table-striped">
			          			<tr>
			          				<td>Resident ID</td>
			          				<td>Resident Name</td>
			          				<td>Address</td>
			          				<td>Gender</td>
			          				<td>Birthday</td>
			          				<td>Spouse Name</td>
			          				<td>Annual Income</td>
			          				<td>Command</td>
			          			</tr>
			          			<?php 
			          				$query = "SELECT * FROM residents ORDER BY resident_id DESC ";
								  		$result = $object->execute_query($query);   
								           while($row = mysqli_fetch_object($result)) { 

								           	echo "<tr>
							          				<td><a href='viewResident.php?id=".$row->resident_id."'>".$row->resident_id."</a></td>
							          				<td>".$row->resident_name."</td>
							          				<td>".$row->address."</td>
							          				<td>".$row->gender."</td>
							          				<td>".$row->birthday."</td>
							          				<td>".$row->spouse_name."</td>
							          				<td>".number_format($row->annual_income,2)."</td>
							          				<td><button type='button' name='update' id='".$row->id."' class='btn btn-success btn-xs updateResident'>Update</button></td>
							          			</tr>";
											}
			          			 ?>
			          	</table>
			          
           </div>
     </div>  
</div> 
<div class="modal fade" id="myModalResidents" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Resident</h4>
      </div>
      <form class="form-horizontal" id="updateresidentform" method="POST">
	      <div class="modal-body">
			    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label text-left">Resident ID</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="residentID" id="residentID">
                  </div>
                </div>
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label text-left">Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="name" id="name" placeholder="Name" required="true">
                     
                    </div>
                  </div> 
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label text-left">Complete Address</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="address" id="address"  placeholder="Complete Address">
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label text-left">Gender</label>
                      <div class="col-sm-8">
                        <select name="gender" id="gender" class="form-control" required="true">
                          <option value="">Please Select</option>
                          <option value="Male">Male</option>
                          <option value="Fale">Female</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label text-left">Birthday</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control"  name="bday" id="bday"  placeholder="Birthday">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label text-left">Spouse Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control"  name="spname" id="spname" placeholder="Spouse Name" required="true">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label text-left">Annual Income</label>
                    <div class="col-sm-8">
                      <select required="true" class="form-control" name="income" id="income">
                          <option value="">Please Select</option>
                          <option value="10000">10000</option>
                          <option value="20000">20000</option>
                          <option value="30000">30000</option>
                          <option value="40000">40000</option>
                          <option value="50000">50000</option>
                          <option value="60000">60000</option>
                          <option value="70000">70000</option>
                          <option value="80000">80000</option>
                          <option value="90000">90000</option>
                          <option value="100000">100000</option>
                      </select>
                    </div>
                  </div> 
                  <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label text-left">Occupation</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="occupation" id="occupation" placeholder="Occupation" required="true">
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label text-left">Spouse Occupation</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="spoccupation" id="spoccupation" placeholder="Spouse Occupation" required="true">
                  </div>
                </div> 
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label text-left">Educational Attainment</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="educ_attained" id="educ_attained" placeholder="Education Attainment" required="true">
                  </div>
                </div> 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label text-left">Spouse Educational Attainment</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="speduc_attained" id="speduc_attained" placeholder="Spouse Education Attainment" required="true">
                  </div>
                </div> 		
	<input type="hidden" name="action" id="action" value="addResident" />
    <input type="hidden" name="resident_id" id="resident_id" />
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>		
    </div>  
</div>
<?php 
include 'includes/footer.php';
?>
