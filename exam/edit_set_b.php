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
</head>
<body>
<div class="container">
<br />
<h5>SET A - Questions 1-10 <a href="dashboard.php">BACK to HOME</a></h5>
<?php
			if(isset($_POST['savequest'])){
				for($hi=1;$hi<11;$hi++){
					
				$question = $_POST['question'.$hi];
				$a = $_POST['cA'.$hi];
				$b = $_POST['cB'.$hi];
				$c = $_POST['cC'.$hi];
				$d = $_POST['cD'.$hi];
				$answer = $_POST['answer'.$hi];
				$replace = mysqli_query($connect,"UPDATE questions SET question='$question', a='$a', b='$b', c='$c', d='$d', answerki='$answer' WHERE numassign='$hi' AND qset='B'");
				$key_replace = mysqli_query($connect,"UPDATE answer_key SET a$hi='$answer' WHERE qset='B'");
				}
				
				if($replace && $key_replace){
					echo '<div class="alert alert-block alert-success">Questions were successfully Updated.</div></h5>
					<script>window.setTimeout(function() {window.location = "questions.php";}, 3000);</script>';
				}else{
					echo '<div class="alert alert-block alert-success">Error, You are Dumb!</div></h5>
					<script>window.setTimeout(function() {window.location = "edit_set_a.php";}, 3000);</script>';
				}	
				
			}
			?>	
<form method="POST">
<div class="row">
<?php 
$questions = mysqli_query($connect,"SELECT * FROM questions WHERE qset='B'");
while($fetch = mysqli_fetch_array($questions)){
?>
	<div class="span6">
		<div class="thumbnail well">
			<div class="caption">
			<p>
			<b>
			<?php echo $fetch[6];?>
			<input value="<?php echo $fetch[1]; ?>" name="question<?php echo $fetch[6];?>" class="span5" type="text"  required="required"></input>
			</b><br />
				<ul style="list-style:none;">
				<li>
					Choices :<br />
					<input class="span1" type="text" value="A" readonly="readonly"></input>
					<input value="<?php echo $fetch[2]; ?>" name="cA<?php echo $fetch[6];?>" class="span4" type="text" required="required"></input>
					<input class="span1" type="text" value="B" readonly="readonly"></input>
					<input value="<?php echo $fetch[3]; ?>" name="cB<?php echo $fetch[6];?>" class="span4" type="text" required="required"></input>
					<input class="span1" type="text" value="C" readonly="readonly"></input>
					<input value="<?php echo $fetch[4]; ?>" name="cC<?php echo $fetch[6];?>" class="span4" type="text" required="required"></input>
					<input class="span1" type="text" value="D" readonly="readonly"></input>
					<input value="<?php echo $fetch[5]; ?>" name="cD<?php echo $fetch[6];?>" class="span4" type="text" required="required"></input>
				</li>
				<div class="row">
				<li class="span1">
					Answer :<br />
					<input value="<?php echo $fetch[8]; ?>" name="answer<?php echo $fetch[6];?>" class="span1" type="text" required="required"></input>
				</li>
				</div>
			</ul>
			</p>
			</div>
		</div>
	</div>
<?php 
}
?>
<div class="pull-right">
<button name="savequest" class="btn-success btn-large" >Save Changes</button>
</div>
</div>
</form>
</body>
</html>