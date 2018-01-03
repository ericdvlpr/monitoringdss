<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          				<h1 class="page-header">Dashboard</h1>

			          <div class="row placeholders">
			          	<div class="col-md-3">
			          		<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Residents</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_resident(); ?></h1>
								  </div>
							</div>
			          	</div>
			            <div class="col-md-3">
			            	<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Grant for Medicine</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_medicines(); ?></h1>
								  </div>
							</div>
			            </div>	
						<div class="col-md-3">
							<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Grant for School Supplies</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_supplies(); ?></h1>
								  </div>
							</div>
						</div>	
						<div class="col-md-3">
							<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Grant for Scholarship</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_scholarship(); ?></h1>
								  </div>
							</div>
						</div>	
						<div class="col-md-3">
							<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Exam Takers</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_user(); ?></h1>
								  </div>
							</div>
						</div>	
						<div class="col-md-3">
							<div class="panel panel-default">
								  <div class="panel-heading">
								    <h3 class="panel-title">No of Users</h3>
								  </div>
								  <div class="panel-body">
								    	<h1><?php echo $object->count_total_user(); ?></h1>
								  </div>
							</div>
						</div>	
			          </div>
           </div>
     </div>  
</div>  
<?php 
include 'includes/footer.php';
?>
