<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
			<div class="page-header">
				<h1>List of Qualified for Supply Grant</h1>
			</div>
			<table class="table table-striped">
				<tr>
					<td>Resident #</td>
					<td>Resident Name</td>
					<td>Resident Annual Income</td>
					
				</tr>
				<?php 
				$query = "SELECT * FROM grant_table";
					  		$result = $object->execute_query($query);   
					           while($row = mysqli_fetch_object($result))  
					           {    
									$grantAgeAve=$row->age_average;   
					$query1 = "SELECT * FROM residents r JOIN family_table ft WHERE ft.age > '$grantAgeAve' "; 
					$result1 = $object->execute_query($query1);
					  while($row = mysqli_fetch_object($result1))  
			           {  
			           		echo "<tr>
									<td>".$row->resident_id."</td>
									<td>".$row->resident_name."</td>
									<td>".$row->annual_income."</td>
			           			</tr>";
			           }
			       }
				 ?>	
			</table>
	    </div>  
	</div>  
<?php 
include 'includes/footer.php';
?>