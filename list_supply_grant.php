<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
        	<ol class="breadcrumb">
			  <li><a href="index.php">Home</a></li>
			  <li><a href="reports.php">Reports</a></li>
			  <li class="active">Supply Grant</li>
			</ol>
			<div class="page-header">
<div class="btn-group">
					<button class="btn btn-default" id='print' onclick="printContent('div1')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> PRINT</button>
				</div>
<div id='div1'>
				<h1 class="text-center">List of Qualified for Supply Grant</h1>
		
			<table class="table table-striped" id="div1">
				<tr>
					<td>Resident #</td>
					<td>Child's Name</td>
					<td>Child's Age</td>
					
				</tr>
				<?php 
				$query = "SELECT * FROM grant_table";
				$result = $object->execute_query($query);   
				while($row = mysqli_fetch_object($result)) {    
					  $grantAgeAve=$row->age_average;   
					  $query1 = "SELECT * FROM family_table WHERE age <= '$grantAgeAve'  "; 
					  $result1 = $object->execute_query($query1);
					  $rowCount = mysqli_num_rows($result1);
					  if($rowCount==0) {
						 echo "<tr>
						 		<td colspan='3' align='center'>NO DATA</td>
						 	</tr>";
					    }else{
							while($row = mysqli_fetch_object($result1)) {  
							         	echo "<tr>
										<td>".$row->resident_id."</td>
										<td>".$row->resident_name."</td>
										<td>".$row->age."</td>
							         		</tr>";
							}
						}
					  
			    }
				 ?>	
			</table>
	    </div> 
	    	</div> 
	    </div>  
	</div>  
<?php 
include 'includes/footer.php';
?>
