<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
    <div class="row">

			<?php include 'includes/sidemenu.php';?> 
  			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Reports</h1>
					  	<?php
					  	$query = "SELECT * FROM grant_table";
					  		$result = $object->execute_query($query);   
					           while($row = mysqli_fetch_object($result)) {    
									$grantName=$row->grant_name;  
									 $grantGradeAve=$row->grade_average;  
									$grantAnnualIncome=$row->annual_income;  
									 $grantAgeAve=$row->age_average; 
								 
									$query1 = "SELECT * FROM residents WHERE annual_income < '$grantAnnualIncome' "; 
									$result1 = $object->execute_query($query1);
									 $count1 = mysqli_num_rows($result1);
									if($count1 > 1){
										echo "<h4><a href='list_medicine_grant.php'>List of Qualified Grantee for Medicine Grant</a></h4>";
									}
									$query2 = "SELECT * FROM residents r JOIN family_table ft WHERE ft.age >= '$grantAgeAve' "; 
									$result2 = $object->execute_query($query2);
									$count2 = mysqli_num_rows($result2);
									if($count2 > 1){
										echo "<h4><a href='list_supply_grant.php'>List of Qualified Grantee for School Supplies Grant</a></h4>";
									}
									$query3 = "SELECT * FROM residents r JOIN family_table ft WHERE ft.grade_ave >= '$grantGradeAve' "; 
									$result3 = $object->execute_query($query3);
									$count3 = mysqli_num_rows($result3);
									if($count3 >= 1){
										echo "<h4><a href='list_scholarship_grant.php'>List of Qualified Grantee for Scholarship Grant</a></h4>";
									}
					       }   

					  	?>

     </div>  
</div>  
<?php 
include 'includes/footer.php';
?>
