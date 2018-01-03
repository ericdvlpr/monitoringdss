			<?php 
			include_once('myconnection.php');
			if(isset($_POST['submit'])){
			$mycode = $_POST['passcode'];
			$source = mysqli_query($connect,"SELECT * FROM codes WHERE passcode = '$mycode'");
			$count = mysqli_num_rows($source);
			if($count >= 1){
				$data = mysqli_fetch_array($source);
				$_SESSION['myname'] = $data[1];
				$_SESSION['mycode'] = $data[2];
				header('Location:gateway.php');
			}else{
				echo '<div class="alert alert-block alert-danger"><b>The code you entered is incorrect!</b></div></h5>
				<script>window.setTimeout(function() {window.location = "index.php";}, 3000);</script>';
			}
			}elseif(isset($_POST['login'])){
			$username = $_POST['uname'];
			$password = md5($_POST['upass']);
			
			$compare = mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'");
			
			$count = mysqli_num_rows($compare);
			echo $count;
			if($count >= 1){
				$data = mysqli_fetch_array($compare);
				$_SESSION['username'] = $data[1];
				header('Location:dashboard.php');
			}else{
				echo '<div class="alert alert-block alert-danger"><b>Sorry, Login Failed!</b></div></h5>
				';
			}	
			}else{
			?>
			<h3>Get Started</h3>
			<?php
			}
			?>
			
			