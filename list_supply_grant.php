<?php include 'includes/header.php';?>  
    <div class="container-fluid"> 
        <div class="row">
			<div class="page-header">

				<div class="btn-group">
					<button class="btn btn-default" id='print' onclick="printContent('div1')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> PRINT</button>
				</div>
					<div id='div1'>
							<div class="col-md-12">
								<h1 class="text-center">List of Qualified for Supply Grant</h1>
									<table class="table table-striped" id="div1">
										<tr>
											<td>Resident #</td>
											<td>Child's Name</td>
											<td>Child's Age</td>
											<td>Annual Income</td>
											<td>Address</td>
											
										</tr>
										<?php 
										$query = "SELECT * FROM grant_table";
										$result = $object->execute_query($query);   
										while($row = mysqli_fetch_object($result)) {    
											  $grantAgeAve=$row->age_average;   
											  $annual_income=$row->annual_income;   
											  $query1 = "SELECT * FROM family_table ft JOIN residents rs ON ft.fam_id=rs.resident_id WHERE ft.age <= '$grantAgeAve' AND rs.annual_income <= '$annual_income' "; 
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
																<td>".$row->chresident_name."</td>
																<td>".$row->age."</td>
																<td>".number_format($row->annual_income)."</td>
																<td>".$row->address."</td>
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
	</div>  
<?php 
include 'includes/footer.php';
?>
