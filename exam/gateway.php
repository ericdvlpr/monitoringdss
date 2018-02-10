<!DOCTYPE html>
<?php
session_start();
if(empty($_SESSION['myname'])) {
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
<center>
		<div class="thumbnail well">
		<h3 align="center">Scholarship Grant Examination</h3>
		<hr />
			<div class="caption">
			<h5>Name:  <?php echo strtoupper($_SESSION['myname']); ?> | Ref. Number: <?php echo strtoupper($_SESSION['mycode']); ?></h5>
			<br />			
			<?php 
			$codec = $_SESSION['mycode'];
			$check_validity = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM codes WHERE passcode='$codec'"));
			if($check_validity[3] >= 1){
			?>
			<p>
			<b>Reminders:</b><br /><br />
			* Once you Failed the Exam, No More Second Chance.<br />
			* Finalize your Answers before you click the Submit button.<br />
			* You Have 15 Minutes to Answer all Questions.<br />
			* You will get 2 Points for each Correct Answer.<br />
			* Passing Grade is 75.<br />
			* No Cheating, God is watching!<br />
			</p>
			<br />
			<a href="quest.php"><button class="btn-success btn-large" >Let's Rock !</button></a>
			<a href="logout.php"><button class="btn-danger btn-large" >Cancel</button></a>
			<br />
			<?php
			}else{
			?>
			<p>
			<?php 
			$get_result = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM exams WHERE passcode='$codec'"));
			if($get_result[3] >= 80){  
				echo '<h5><div class="alert alert-block alert-success">Congratulations! You Passed.</div></h5>';
				echo 'Your Score is:';
				echo '<h1>'.$get_result[2].'/10</h1>';
				echo '<h1>'.$get_result[3].'%</h1>';
				echo '<br />';
			?>
			<button id="noprint" class="btn-inverse btn-large" onclick="window.print();">Print Result</button>
			<a href="logout.php"><button id="noprint" class="btn-danger btn-large" >Logout</button></a>
			<?php
			}else{
				echo '<h5><div class="alert alert-block alert-danger">Sorry! But You Failed.</div></h5>';
				echo 'Your Score is:';
				echo '<h1>'.$get_result[2].'/10</h1>';
				echo '<h1>'.$get_result[3].'%</h1>';
				echo '<hr />';
			?>
			<a href="logout.php"><button class="btn-danger btn-large" >Logout</button></a>
			<?php
			}
			?>
			</p>
			<?php 
			}
			?>
			<br/>
		</div>
		</div>
</center>
</div>
<div class="span3"></div>
</div>
</div>

</body>
</html>