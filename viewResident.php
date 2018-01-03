<?php include 'includes/header.php';
if(isset($_GET['id'])){
  $query = "SELECT * FROM residents WHERE resident_id ='".$_GET['id']."'";
  $result=$object->execute_query($query);
  while($row = mysqli_fetch_assoc($result)) {
      $residentId = $row['resident_id'];
      $residentName = $row['resident_name'];
      $address = $row['address'];
      $gender = $row['gender'];
      $birthday = $row['birthday'];
      $spouse_name = $row['spouse_name'];
      $annual_income = $row['annual_income'];
  }  
}
 

?>  
    <div class="container-fluid"> 
                <div class="row">
						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			          			<div class="row placeholders">
				          	<div class="panel panel-default">
                          <div class="panel-heading">
                            <h3 class="panel-title">View Residents</h3>  
                          </div>
                          <div class="panel-body">
                      <form class="form-horizontal"  id='residentform' method="Post" class="collapse">
                            <div class="row">
                             <div class="col-xs-6">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-3 control-label text-left">Resident ID</label>
                                      <div class="col-sm-5">
                                        <input type="text" class="form-control"  name="residentID" id="residentID" value="<?php echo $residentId; ?>" placeholder="Resident ID" readonly="true">
                                      </div>
                                    </div>
                                  <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Name</label>
                                        <div class="col-sm-5">
                                          <input type="text" class="form-control"  name="name" id="name" placeholder="Name" value="<?php echo $residentName;?>" readonly="true">
                                         
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-3 control-label text-left">Complete Address</label>
                                          <div class="col-sm-5">
                                            <input type="text" class="form-control"  name="address" id="address" value="<?php echo $address;?>"  placeholder="Complete Address" readonly="true" />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputPassword3" class="col-sm-3 control-label text-left">Gender</label>
                                          <div class="col-sm-5">
                                            <select readonly="true" name="gender" id="gender" class="form-control" >
                                                
                                              <?php 
                                                  if(isset($_GET['id'])){
                                                    echo "<option value='".$gender."'>".$gender."</option>";
                                                  }else{
                                                    echo "
                                              <option value='male'>Male</option>
                                              <option value='female'>Female</option>";
                                                  }
                                              ?>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Birthday</label>
                                        <div class="col-sm-5">
                                          <input readonly="true" type="date" class="form-control"  name="bday" id="bday"  placeholder="Birthday" value="<?php echo $birthday;?>">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                       <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Spouse Name</label>
                                        <div class="col-sm-5">
                                          <input readonly="true" type="text" class="form-control"  name="spname" id="spname" placeholder="Spouse Name" required="true" value="<?php echo $spouse_name;?>">
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-3 control-label text-left">Annual Income</label>
                                        <div class="col-sm-5">
                                          <select readonly="true" required="true" class="form-control" name="income" name="income">
                                              <option value="">Please Select</option>
                                              <option value="100-1000">100-1000</option>
                                              <option value="1000-2000">1000-2000</option>
                                              <option value="3000-4000">3000-4000</option>
                                              <option value="5000-6000">5000-6000</option>
                                              <option value="7000-8000">7000-8000</option>
                                              <option value="9000-10000">9000-10000</option>
                                              <?php echo "<option value='".$annual_income."'>".$annual_income."</option>" ?>
                                          </select>
                                        </div>
                                      </div> 
                                  </div>
                              </div> 
                             
                              <table class="table table-bordered" id="children_table">
                                <tr>
                                 <th>Child's Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 
                                 <!--<th> <button type="button" name="add" class="btn btn-success btn-sm add" id='add'><span class="glyphicon glyphicon-plus"></span></button> </th>-->
                                </tr>
                                <?php 
                                    if(isset($_GET['id'])){
                                      $query = "SELECT * FROM family_table WHERE fam_id ='".$_GET['id']."'";
                                      $result=$object->execute_query($query);
                                      while($row = mysqli_fetch_assoc($result)) {
                                          $childName = $row['child_name'];
                                          $age = $row['age'];
                                          $gender = $row['gender'];
                                          echo "<tr>
                                                 <td>".$childName."</td> 
                                                 <td>".$age."</td> 
                                                 <td>".$gender."</td> 
                                                 
                                          ";
                                      }  

                                    }
                                 ?>
                            </table>
                          </div>
                        </div>
                        <input type="hidden" name="action" id="action" value="addResident" />
                        <input type="hidden" name="res_id" id="res_id" />
                        <!-- <input type="submit" class="btn btn-primary" name="button_action" value="Save" /> -->
                  </form>       
              	</div>
           </div>
     </div>  
</div>

<?php 
include 'includes/footer.php';
?>
