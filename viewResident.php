<?php include 'includes/header.php';
if(isset($_GET['id'])){
  $query = "SELECT * FROM residents  WHERE resident_id ='".$_GET['id']."'";
  $result=$object->execute_query($query);
  while($row = mysqli_fetch_assoc($result)) {
      $residentId = $row['resident_id'];
      $residentName = $row['resident_name'];
      $address = $row['address'];
      $gender = $row['gender'];
      $birthday = $row['birthday'];
      $spouse_name = $row['spouse_name'];
      $annual_income = $row['annual_income'];
      $occupation = $row['occupation'];
      $spoccupation = $row['spoccupation'];
      $educational_attained = $row['educational_attained'];
      $speducational_attained = $row['speducational_attained'];
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
                            <h3 class="panel-title text-left">Residents Profile</h3>  
                          </div>
                          <div class="panel-body">
                      <form class="form-horizontal"  id='residentform' method="Post" class="collapse">
                            <div class="row">
                             <div class="col-xs-6">
                                    
                                      <h3 class="text-left"><strong>Resident ID:</strong> <?php echo $residentId; ?></h3>
                                    
                                        <h3 class="text-left"><strong>Name:</strong> <?php echo $residentName;?></h3>
                                        
                                      
                                          <h3 class="text-left"><strong>Complete Address:</strong> <?php echo $address;?></h3>
                                                                                
                                     
                                          <h3 class="text-left"><strong>Gender:</strong> <?php echo $gender; ?></h3>
                                        <h3 class="text-left"><strong>Birthday: </strong> <?php echo $birthday;?></h3>
                                      
                                        <h3 class="text-left"><strong>Spouse Name: </strong> <?php echo $spouse_name;?></h3>
                                  </div>
                                  <div class="col-xs-6">
                                        <h3 class="text-left"><strong>Annual Income: </strong> <?php echo $annual_income; ?></h3>

                                      
                                        <h3 class="text-left"><strong>Occupation: </strong><?php echo $occupation; ?></h3>
                                        
                                     
                                        <h3 class="text-left"><strong>Spouse Occupation: </strong><?php echo $spoccupation; ?></h3>
                                       
                                      
                                        <h3 class="text-left"><strong>Educational Attainment: </strong><?php echo $educational_attained; ?></h3>

                                      
                                        <h3 class="text-left"><strong>Spouse Educational Attainment: </strong><?php echo $speducational_attained; ?></h3>

                                       
                                  </div>
                              </div> 
                             
                              <table class="table table-bordered" id="children_table">
                                <tr>
                                 <th>Child's Name</th>
                                 <th>Age</th>
                                 <th>Gender</th>
                                 <th>Grade Average</th>
                                 <th>Educational Attainment</th>
                                 <th>Passcode</th>
                                 <th>Status</th>
                                 <th>Action</th>
                                 
                                 <!--<th> <button type="button" name="add" class="btn btn-success btn-sm add" id='add'><span class="glyphicon glyphicon-plus"></span></button> </th>-->
                                </tr>
                                <?php 
                                    if(isset($_GET['id'])){
                                      $query = "SELECT * FROM family_table WHERE fam_id ='".$_GET['id']."'";

                                      $result=$object->execute_query($query);
                                      while($row = mysqli_fetch_assoc($result)) {
                                        $query1 = "SELECT * FROM exams WHERE passcode ='".$row['code']."'";
                                        $result1 = $object->execute_query($query1);   
                                          $countRecord = mysqli_num_rows($result1);  
                                         $query2 = "SELECT * FROM grant_table";
                                        $result2 = $object->execute_query($query2);
                                        $row1 = mysqli_fetch_assoc($result2); 
                                        $gradeAve = $row1['grade_average'];
                                         $grantRecord = mysqli_num_rows($result2);  

                                          if($row['grade_ave'] >= $gradeAve){
                                            $status = '<span class="label label-success">Qualified to take Exam </span>';
                                            $btn = '<a href="exam/index.php" class="btn btn-Warning btn-sm edit">Take Exam</a>';
                                          }else{
                                            
                                            $status = '<span class="label label-success">Is not Qualified to take Exam </span>';
                                            $btn = '<a href="#" class="btn btn-primary btn-sm edit"disabled>Take Exam</a>';
                                          }
                                          echo "<tr>
                                                 <td>".$row['resident_name']."</td> 
                                                 <td>".$row['age']."</td> 
                                                 <td>".$row['gender']."</td> 
                                                 <td>".$row['grade_ave']."</td> 
                                                 <td>".$row['educational']."</td> 
                                                 <td>".$row['code']."</td> 
                                                 <td>".$status."</td> 
                                                 <td>".$btn."<button type='button' name='edit' class='btn btn-success btn-sm updateChild' id='".$row['id']."'>UpdateChild</span></button></td> 
                                                 
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
<div class="modal fade" id="myModalChild" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Resident</h4>
      </div>
      <form class="form-horizontal" id="childform" method="POST">
        <div class="modal-body">
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label text-left">Resident ID</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="residentID" id="residentID">
                  </div>
              </div>
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label text-left">Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  name="name" id="name" placeholder="Name" required="true">
                     
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label text-left">Age</label>
                    <div class="col-sm-5">
                      <input type="number" class="form-control"  name="age" id="age" required="true">
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label text-left">Gender</label>
                     <div class="col-sm-5">
                        <select class="form-control" name="gender" id="gender">
                          <option value="">Please Select</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div> 
              </div> 
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label text-left">Grade Average</label>
                    <div class="col-sm-5">
                      <input type="number" class="form-control"  name="grade_ave" id="grade_ave" required="true">
                    </div>
              </div>
              <div class="form-group">
                    <label for="inputPassword3" class="col-sm-3 control-label text-left">Educational</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control"  name="educational" id="educational" required="true">
                    </div>
              </div>   
                <input type="hidden" name="action" id="action" value="Edit Child" />
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
