<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          				<h1 class="page-header">System Settings</h1>
								<div class="panel panel-default">
									  <!-- Default panel contents -->
									  <div class="panel-heading"><button type="button" name="addGrant" class="btn btn-success btn-sm pull-left" id="addGrant"><span class="glyphicon glyphicon-plus"></span></button><h4 class="text-center">Grant Table</h4></div>

									  <!-- Table -->
									  <table class="table" >
									    	<tr>
									    		<td>#</td>
									    		<td>Grant Name</td>
									    		<td>Grade Point Average</td>
									    		<td>Annual Salary</td>
									    		<td>Age Average</td>
									    		<td>Command</td>
									    	</tr>
									    	<tbody id="grant_table"></tbody>
									  </table>
									</div>			
          				</div>
		     	</div>  
	</div>
<div class="modal fade" id="myModalGrant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Grant</h4>
      </div>
      <form class="form-horizontal" method="POST" name="grantform" id="grantform">
       <div class="modal-body">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">Grant Name</label>
		    <div class="col-sm-9">
		      <input type="text" class="form-control" name="grantName" id="grantName" placeholder="Grant Name">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-3 control-label">GPA</label>
		    <div class="col-sm-9">
		      <input type="number" class="form-control" min='85' max='95' name="gpa" id="gpa" placeholder="Grade Point Average">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-3 control-label">Annual Income</label>
		    <div class="col-sm-9">
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
		    <label for="inputPassword3" class="col-sm-3 control-label">Age Average</label>
		    <div class="col-sm-9">
		      <input type="number" class="form-control" name="age_ave" id="age_ave" min="6"  placeholder="Age Average">
		    </div>
		  </div>
      </div>
      <input type="hidden" name="action" id="action" value="addGrant" />
       <input type="hidden" name="grant_id" id="grant_id" />
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>  
<?php 
include 'includes/footer.php';
?>
