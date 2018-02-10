<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
        	<ol class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="reports.php">Reports</a></li>
			  <li class="active">Scholarship Grant</li>
			</ol>
			<div class="page-header">
			<div class="btn-group">
					<button class="btn btn-default" id='print' onclick="printContent('div1')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> PRINT</button>
				</div>
			<div id='div1'>
					<div class="col-md-12">
						<h1 class="text-center">List of Qualified for Scholarship Grant</h1>

					
					<table class="table table-striped" id="div1">
						<tr>
							<td>Resident #</td>
							<td>Resident Name</td>
							<td>Resident Address</td>
							<td>Resident Grade Average</td>
							<td>Resident Exam Score</td>
							<td>Resident Exam Grade Average</td>
							
						</tr>
						<?php 
						$query = "SELECT * FROM grant_table";
							  		$result = $object->execute_query($query);   
							           while($row = mysqli_fetch_object($result))  
							           {    
											echo $grantGradeAve=$row->grade_average;
									 	}
							$query3 = "SELECT * FROM family_table ft JOIN exams e ON ft.code = e.passcode JOIN residents rs ON rs.resident_id=ft.fam_id WHERE e.percentage >= 80 "; 
							$result3 = $object->execute_query($query3);
							  while($row = mysqli_fetch_object($result3))  
					           {  
					           		echo "<tr>
											<td>".$row->resident_id."</td>
											<td>".$row->chresident_name."</td>
											<td>".$row->address."</td>
											<td>".$row->grade_ave."</td>
											<td>".$row->score."/10</td>
											<td>".$row->percentage."</td>
											
					           			</tr>";
					           }
					      
						 ?>	
					</table>
					</div>
			</div>
	    </div>  
	    </div>  
	</div>  
<?php 
include 'includes/footer.php';
?>
