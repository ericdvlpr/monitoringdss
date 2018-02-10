<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
                <div class="row">

						<?php include 'includes/sidemenu.php';?> 
              			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              				<form class="navbar-form navbar-right">
						        <div class="form-group">
						          <input type="text" name="search" a id="search" autocomplete="off" class="form-control" placeholder="Search Resident Here">
						        </div>
						        <ul class="list-group" id="result"></ul>
						      
						      </form>
          				<h1 class="page-header">SEARCH RESULTS</h1>
			          <div class="row placeholders">
					<?php 
			          			if(isset($_GET['id'])){
									 $query = "SELECT * FROM family_table  WHERE resident_id LIKE '%".$_GET['id']."%'  ";
									 $query1 = "SELECT * FROM grant_table";
							  		$result = $object->execute_query($query1);   
							           while($row = mysqli_fetch_object($result)) {    
											$grantGradeAve=$row->grade_average;
									 	}
									 	
									  $result=$object->execute_query($query);
										while($row = mysqli_fetch_assoc($result)) {
													  		if($row['grade_ave']>=$grantGradeAve){
													  			$grantStatus = '<span class="label label-success">Qualified to take Exam </span><br /><br /><a href="exam/index.php" class="btn btn-Warning btn-sm edit">Take Exam</a>';
													  		}else{
													  			$grantStatus = '<span class="label label-warning">Not Qualified to take Exam</span>';
													  		}
													      echo "
													      <div class='col-sm-6 col-md-4'>
															    <div class='thumbnail'>
															      <div class='caption text-left'>
															        <h3 class='page-header'>".$row['chresident_name']."</h3>
															         <p> Grade Average: ".$row['grade_ave']."</p>
																	   $grantStatus
																	   
															      </div>
															    </div>
															  </div>";

													  }  
									 	}

			          		 ?>
			        
			    </div>
           </div>
     </div>  
</div>  
<?php 
include 'includes/footer.php';
?>
