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
</head>
<body>
<div class="container">
<br />
<h5>Name : <?php echo strtoupper($_SESSION['myname']); ?> | Ref. Number: <?php echo strtoupper($_SESSION['mycode']); ?></h5>
<form method="POST" action="submit.php">
<?php 
$codec= $_SESSION['mycode'];
$get_set = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM codes WHERE passcode='$codec'"));
include_once('set_a.php');
?>
<input type="hidden" name="sets" value="A"></input>
</form>
</body>
</html>