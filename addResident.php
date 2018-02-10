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
                                      <label for="inputEmail3" class="col-sm-4 control-label text-left">Resident ID</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control"  name="residentID" id="residentID" placeholder="Resident ID" readonly="true" value="<?php echo $num = substr(str_shuffle("0123456789"), -4);?>">
                                      </div>
                                    </div>
                                  <div class="form-group" id="form-group-name">
                                        <label for="inputPassword3" class="col-sm-4 control-label text-left">Resident Name</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="name" id="name" placeholder="Last Name, First Name Middle Name" required="true">
                                         
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-4 control-label text-left">Complete Address</label>
                                          <div class="col-sm-8">
                                            <select required="true" class="form-control" name="address">
                                              <option value="">Please Select</option>
                                              <?php 
                                                  $query = "SELECT * FROM barangay "; 
                                                $result = $object->execute_query($query);
                                                  while($row = mysqli_fetch_object($result)) {  
                                                          echo "
                                                        <option value=".$row->barangay.">".$row->barangay."</option>
                                                           ";
                                                       }
                                               ?>
                                          </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-4 control-label text-left">Gender</label>
                                          <div class="col-sm-8">
                                            <select name="gender" id="gender" class="form-control" required="true">
                                              <option value="">Please Select</option>
                                              <option value="Male">Male</option>
                                              <option value="Famale">Female</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label text-left">Birthday</label>
                                        <div class="col-sm-8">
                                          <input type="date" class="form-control"  name="bday" id="bday"  placeholder="Birthday">
                                        </div>
                                      </div>
                                       <div class="form-group" id="form-group-spname">
                                        <label for="inputPassword3" class="col-sm-4 control-label text-left">Spouse Name</label>
                                        <div class="col-sm-8">
                                          <input type="text" class="form-control"  name="spname" id="spname" placeholder="Maiden Name, First Name Middle Name" required="true">
                                        </div>
                                      </div> 
                                  </div>
                                  <div class="col-xs-6">
                                      
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label text-left">Annual Income</label>
                                        <div class="col-sm-8">
                                          <select required="true" class="form-control" name="income" name="income">
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

                                  </div>
                              </div> 
                             
                              <table class="table table-bordered" id="children_table">
                                <tr align="center">
                                 <th>Child's Name</th>
                                 <th>Birthday</th>
                                 <th>Gender</th>
                                 <th>Educational Attainment</th>
                                 <th>Grade Average</th>
                                 
                                 <th><button type="button" name="add" class="btn btn-success btn-sm add" id='add'><span class="glyphicon glyphicon-plus"></span></button></th>
                                </tr>
                                <?php 

                                 ?>
                            </table>
                          </div>
                        </div>
                        <input type="hidden" name="action" id="action" value="addResident" />
                        <input type="hidden" name="res_id" id="res_id" />
                        <input type="submit" class="btn btn-primary" name="button_action" id="button_action" value="Save" />
                  </form>       
              	</div>
           </div>
     </div>  
</div>
<?php 
include 'includes/footer.php';
?>
