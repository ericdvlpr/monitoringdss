 <?php  

 include 'core/database.php';  
 $object = new Database();  
 if(empty($_SESSION['username'])){
 	header('location:login.php');
 }
 ?> 
 <html>  
      <head>  
   		<title>Transaction Processing System</title> 
	     <link rel="stylesheet" href="css/bootstrap.min.css" />  
	      <link rel="stylesheet" href="css/style.css">
	      <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
	      <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
      </head> 
 <body>  
 	<?php include 'includes/nav.php'; ?>