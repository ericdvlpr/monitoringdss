<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php //include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	          				<h1 class="page-header">Employees</h1>
							<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
							  Add Employee
							</button>	
			          			<div class="row placeholders">
				          	
							            <table class="table table-bordered table-striped">  
								                <tr>  
								                     <th width="14%">Employee ID</th>  
								                     <th width="14%">First Name</th>  
								                     <th width="14%">Last Name</th>  
								                     <th width="14%">Address</th>  
								                     <th width="14%">Gender</th>  
								                     <th width="14%">Birthday</th>  
								                     <th width="14%">Command</th>  
								                </tr>
								                <tbody id="resident_table"></tbody>
								        </table>        
			          		</div>
           </div>
     </div>  
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Employee</h4>
      </div>
      <div class="modal-body">
       			<form class="form-horizontal" id="employeeform" method="Post" class="collapse">
      <div class="modal-body">
        
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label text-left">Employee ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  name="employeeID" id="employeeID" placeholder="Employee ID" readonly="true" value="<?php echo $num = substr(str_shuffle("0123456789"), -4);?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">Last Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  name="lname" id="lname" placeholder="Last Name" required="true">
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">First Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  name="fname" id="fname"  placeholder="First Name">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">Middle Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  name="mdname" id="mdname"  placeholder="Middle Name">
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">Complete Address</label>
          <div class="col-sm-9">
            <input type="text" class="form-control"  name="address" id="address"  placeholder="Complete Address">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">Gender</label>
          <div class="col-sm-9">
            <select name="gender" id="gender" class="form-control" required="true">
              <option value="">Please Select</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label text-left">Birthday</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" name="bday" id="bday"  placeholder="Birthday">
          </div>
        </div>
        <input type="hidden" name="action" id="action" value="addEmployee" />
        <input type="hidden" name="employee_id" id="employee_id" />
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="button_action" value="Save" />
      </div>
      </form>
      </div>
    </div>
  </div>
</div>  
<?php 
include 'includes/footer.php';
?>
