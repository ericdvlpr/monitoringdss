<?php include 'includes/header.php';

 

?>  
    <div class="container-fluid"> 
                <div class="row">
						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	          				<h1 class="page-header">Add Residents</h1>
			          			<div class="row placeholders">
				          	<div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">Resident Info</h3>  
                          </div>
                          <div class="panel-body">
                      <form class="form-horizontal"  id='residentform' method="Post" class="collapse">
                            <div class="row">
                             <div class="col-xs-6">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-3 control-label text-left">Resident ID</label>
                                      <div class="col-sm-5">
                                        <input type="text" class="form-control"  name="residentID" id="residentID" placeholder="Resident ID" readonly="true" value="<?php echo $num = substr(str_shuffle("0123456789"), -4);?>">
                                      </div>
                                    </div>
                                  <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Name</label>
                                        <div class="col-sm-5">
                                          <input type="text" class="form-control"  name="name" id="name" placeholder="Name" required="true">
                                         
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-3 control-label text-left">Complete Address</label>
                                          <div class="col-sm-5">
                                            <input type="text" class="form-control"  name="address" id="address"  placeholder="Complete Address">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-3 control-label text-left">Gender</label>
                                          <div class="col-sm-5">
                                            <select name="gender" id="gender" class="form-control" required="true">
                                              <option value="">Please Select</option>
                                              <option value="M">Male</option>
                                              <option value="F">Female</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Birthday</label>
                                        <div class="col-sm-5">
                                          <input type="date" class="form-control"  name="bday" id="bday"  placeholder="Birthday">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Spouse Name</label>
                                        <div class="col-sm-5">
                                          <input type="text" class="form-control"  name="spname" id="spname" placeholder="Spouse Name" required="true">
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Annual Income</label>
                                        <div class="col-sm-5">
                                          <select required="true" class="form-control" name="income" name="income">
                                              <option value="">Please Select</option>
                                              <option value="100-1000">100-1000</option>
                                              <option value="1000-2000">1000-2000</option>
                                              <option value="3000-4000">3000-4000</option>
                                              <option value="5000-6000">5000-6000</option>
                                              <option value="7000-8000">7000-8000</option>
                                              <option value="9000-10000">9000-10000</option>
                                          </select>
                                        </div>
                                      </div> 
                                  </div>
                              </div> 
                             
                              <table class="table table-bordered" id="children_table">
                                <tr>
                                 <th>Child's Name</th>
                                 <th>Birthday</th>
                                 <th>Grade Average</th>
                                 <th>Gender</th>
                                 
                                 <th><button type="button" name="add" class="btn btn-success btn-sm add" id='add'><span class="glyphicon glyphicon-plus"></span></button></th>
                                </tr>
                                <?php 

                                 ?>
                            </table>
                          </div>
                        </div>
                        <input type="hidden" name="action" id="action" value="addResident" />
                        <input type="hidden" name="res_id" id="res_id" />
                        <input type="submit" class="btn btn-primary" name="button_action" value="Save" />
                  </form>       
              	</div>
           </div>
     </div>  
</div>
<?php 
include 'includes/footer.php';
?>
