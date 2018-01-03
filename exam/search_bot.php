			<?php 
			if(isset($_GET['shelf_search'])){
			$search_id = $_GET['shelf_search'];
			
			if($search_id == NULL){
			echo '<div class="alert alert-block alert-danger">Please Provide a Keyword!</div>';
			exit();
			}else{
			$query_search = mysql_query("SELECT * FROM exams WHERE name LIKE '%$search_id%' OR score LIKE '%$search_id%' OR passcode LIKE '%$search_id%'");
			$result_search = mysql_num_rows($query_search);
			if($result_search >=1){
				if($result_search>=2){$s = 's';}else{$s = '';}
			echo '<div class="alert alert-block alert-success">'.$result_search.' Result'.$s.' Found!</div>';
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<tr>
			<th>Examinee</th>
			<th>Score</th>
			<th>Remarks</th>
			<th>Ref. Number</th>
			</tr>
			</thead>
			<tbody>
			<?php
			while($show_search = mysql_fetch_array($query_search)){
			?>
			<tr>
				<td><?php echo $show_search[1]; ?></a></td>
				<td><?php echo $show_search[2]; ?></td>
				<td><?php if($show_search[2] >=75){ echo 'Passed'; }else{ echo 'Failed'; }; ?></td>
				<td><?php echo $show_search[3]; ?></td>
			</tr>
			<?php
			}
			?>
			</tbody>
			</table>
			<br />
			<center>
			<a href="dashboard.php"><button class="btn-info btn-small" >Home</button></a>
			<a href="questions.php"><button class="btn-success btn-small" >Questionaire</button></a>
			<a href="results.php"><button class="btn-warning btn-small" >Results</button></a>
			<a href="register.php"><button class="btn-inverse btn-small" >Register</button></a>
			<a href="logout.php"><button class="btn-danger btn-small" >Logout</button></a>
			</center>
			<?php
			exit();
			}else{
			echo '<div class="alert alert-block alert-danger">No Result Found for <b>'.$search_id.'</b>!</div>
			<script>window.setTimeout(function() {window.location = "results.php";}, 3000);</script>';
			}
			}
			}
			?>