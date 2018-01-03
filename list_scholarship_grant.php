<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
			<div class="page-header">
				<h1>List of Qualified for Scholarship Grant</h1>
			</div>
			<table class="table table-striped">
				<tr>
					<td>Resident #</td>
					<td>Resident Name</td>
					<td>Resident Grade Average</td>
					<td>Resident Exam Grade Average</td>
					
				</tr>
				<?php 
				$query = "SELECT * FROM grant_table";
					  		$result = $object->execute_query($query);   
					           while($row = mysqli_fetch_object($result))  
					           {    
									$grantGradeAve=$row->grade_average;
							 	}
					$query3 = "SELECT * FROM residents r JOIN family_table ft ON r.resident_id=ft.fam_id JOIN exams e ON ft.code = e.passcode WHERE ft.grade_ave >= '$grantGradeAve' "; 
					$result3 = $object->execute_query($query3);
					  while($row = mysqli_fetch_object($result3))  
			           {  
			           		echo "<tr>
									<td>".$row->fam_id."</td>
									<td>".$row->child_name."</td>
									<td>".$row->grade_ave."</td>
									<td>".$row->score."</td>
									<td></td>
			           			</tr>";
			           }
			      
				 ?>	
			</table>
	    </div>  
	</div>  
<?php 
include 'includes/footer.php';
?>
