<!DOCTYPE html>
<?php
session_start();
if(empty($_SESSION['username'])) {
    header("location: index.php");
} 
include_once('myconnection.php');
//user_page_security();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>The Camote Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/ico"/>
    <link href="main.css" rel="stylesheet" type="text/css"/>
	<link href="print.css" rel="stylesheet" type="text/css" media="print"/>
</head>
<body>
<div class="container">
<br /><br /><br /><br /><br />
<div class="row">
<div class="span3"></div>
<div class="span6">
		<div class="thumbnail well">
		<h3 align="center">Online Examination | cPanel</h3>
		<hr />
			<div class="caption">
			<h5 align="center">Register | <a href="view_all.php">View All</a></h5>	
			<?php
			if(isset($_POST['save'])){
				$examinee = $_POST['examinee'];
				$passcode = $_POST['code'];
				$set = $_POST['set'];
				
				$saveqry = mysql_query("INSERT INTO codes (id,name,passcode,validity,qset) VALUES ('','$examinee','$passcode','1','$set')");
				if($saveqry){
				echo '<div class="alert alert-block alert-success">Thank You! <b>'.$examinee.'</b> was successfully added.</div></h5>
				<script>window.setTimeout(function() {window.location = "register.php";}, 3000);</script>';
				}else{
				echo '<div class="alert alert-block alert-danger"><b>Something went wrong! Pleas try again.</b></div></h5>';
				}
			}
			?>			
			<p>
			<form method="POST">
			<ul style="list-style:none;">
				<li>
					Name of Examinee :<br />
					<input name="examinee" class="span5" type="text" required="required"></input>
				</li>
				<li>
					Reference No. :<br />
					<input name="code" class="span5" type="text" value="<?php echo substr(md5(date('his')), 0, 10); ?>" readonly="readonly"></input>
				</li>
				<li>
					Set of Questions :<br />
					<select name="set" class="span5" required="required">
					<option value="">Select Set</option>
					<option>A</option>
					<option>B</option>
					<option>C</option>
					</select>
				</li>
				<li>
					<button name="save" class="btn-info btn-large">Save</button>
				</li>
			</ul>
			</form>
			</p>
			<br />
			<center>
			<a href="dashboard.php"><button class="btn-info btn-small" >Home</button></a>
			<a href="questions.php"><button class="btn-success btn-small" >Questionaire</button></a>
			<a href="results.php"><button class="btn-warning btn-small" >Results</button></a>
			<a href="settings.php"><button class="btn-inverse btn-small" >Settings</button></a>
			<a href="logout.php"><button class="btn-danger btn-small" >Logout</button></a>
			</center>
		</div>
		</div>
</div>
<div class="span3"></div>
</div>
</div>

</body>
</html>