<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	          				<h1 class="page-header">Residents</h1>
							<a href="addResident.php" class="btn btn-default">
							  Add resident
							</a>	
			          			<div class="row placeholders">
				          	
							            <table class="table table-bordered table-striped">  
								                <tr>  
								                     <th width="14%">Resident ID</th>  
								                     <th width="14%">Resident Name</th>  
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
 
<?php 
include 'includes/footer.php';
?>
