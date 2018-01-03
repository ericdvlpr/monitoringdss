<?php
$connect=mysqli_connect("localhost", "root", "123456","db_monitoring")or
die("Could not connect: " . mysql_error());
date_default_timezone_set('Asia/Manila');
?>
<?php 
function user_page_security(){
	$sid = $_SESSION['mycode'];
	$secure_pages = mysqli_query($connect,"SELECT * From codes Where passcode = '$sid'");
	$check_point = mysqli_fetch_array($secure_pages);
	if($check_point[3] == 0){
    header("location: gateway.php");
}
}
?>
