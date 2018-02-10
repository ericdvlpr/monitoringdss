<?php 
session_start();
include_once('myconnection.php');
if(isset($_POST['submit'])){
	
	$name = $_SESSION['myname'];
	$codec = $_SESSION['mycode'];
	$set = $_POST['sets'];
	$myans = array($a1 = $_POST['Q1'],
	$a2 = $_POST['Q2'],
	$a3 = $_POST['Q3'],
	$a4 = $_POST['Q4'],
	$a5 = $_POST['Q5'],
	$a6 = $_POST['Q6'],
	$a7 = $_POST['Q7'],
	$a8 = $_POST['Q8'],
	$a9 = $_POST['Q9'],
	$a10 = $_POST['Q10']);
	
	$answers = mysqli_query($connect,"SELECT * FROM answer_key WHERE qset='$set'");
	$keys = mysqli_fetch_array($answers);
	
	for($apple=0;$apple<10;$apple++){
	if($myans[$apple] == $keys[$apple+1]){ $score[$apple+1] = 2; }	else { $score[$apple+1] = 0; }	
	}
<<<<<<< HEAD
	  $first = $score[1] + $score[2] + $score[3] + $score[4] + $score[5];
	  $second = $score[6] + $score[7] + $score[8] + $score[9] + $score[10];
	  $score=$first + $second;
	    $total = ((($score)/10) * 100);
	 if($score < 7 ){
	 	 $total = 65;
	 }
	$save_score = mysqli_query($connect,"INSERT INTO exams (id, name, score,percentage, passcode) Values ('','$name','$score','$total','$codec')");
=======
	$first = $score[1] + $score[2] + $score[3] + $score[4] + $score[5];
	$second = $score[6] + $score[7] + $score[8] + $score[9] + $score[10];
	$total = ((($first + $second)/20) * 30) + 70;
	
	$save_score = mysqli_query($connect,"INSERT INTO exams (id, name, score, passcode) Values ('','$name','$total','$codec')");
>>>>>>> parent of 9964f96... Update Repo
	$change_validity = mysqli_query($connect,"UPDATE codes set validity='0' WHERE passcode ='$codec'");
	if($change_validity && $save_score){
		header('location:gateway.php');
	}else{
		echo 'Error';
	}
}
?>