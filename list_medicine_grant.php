<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
        	<ol class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="reports.php">Reports</a></li>
			  <li class="active">Medicine Grant</li>
			</ol>
			<div class="btn-group">
					<button class="btn btn-default" id='print' onclick="printContent('div1')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> PRINT</button>
				</div>
<div id='div1'>
	

			<div class="page-header">
								<h1 class="text-center">List of Qualified for Medicine Grant</h1>
				
				
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
					           while($row = mysqli_fetch_object($result)) {    
									$grantAnnualIncome=$row->annual_income;  
					$query1 = "SELECT * FROM residents WHERE annual_income <= '$grantAnnualIncome' "; 
					$result1 = $object->execute_query($query1);
					  while($row = mysqli_fetch_object($result1)) {  
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
	</div>  
<?php 
include 'includes/footer.php';
?>
