<!DOCTYPE html>

<?php
   include("test1.php");
   session_start();
  	
  	function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
									}					
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE Reg_No = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count > 0) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header('Location: ums.php');
	 exit;
      }else {
      		
      		function_alert("Incorrect Username/Password");
      		//header('Location: login.php');
  		    }
  		    }	
?>

<html>
	<head>
		<title>Welcome LPU</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/spmain.css" />
		<noscript><link rel="stylesheet" href="css/spnoscript.css" /></noscript>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/spstyles.css">
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

					<section id="banner">
						<div class="inner">
							<div class="container h-100">
							<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="images/lpu.png" class="brand_logo" alt="LPU">
				</div>
			
			</div>
			<div class="d-flex justify-content-center form_container">
				<form action="" method="post">
				<div class="input-group mb-3">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" name="username" id="username" class="form-control input_user" required>
				</div>
				<div class="input-group mb-2">
					<div class="input-group-append">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
					</div>
					<input type="password" name="password" id="password" class="form-control input_pass" required>
				</div>
				<div class="form-group">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
						<label class="custom-control-label" for="customControlInline"><font color="white">Remember me</font>></label>
					</div>
				</div>
				
			</div>
			<!--
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="submit" value= "Submit" name="but_submit" id="but_submit" class="btn login_btn">Login</button>
			</div>
			-->
			<div class="d-flex justify-content-center mt-3 login_container">
			<ul class="actions special">
								<li><button type="submit" value="Submit" class="button primary" >Let's Go!</button></li>
			</ul>
			</div>
				</form>
			<div class="mt-4">
				<div class="d-flex justify-content-center">
					<a onclick="myAlert()" style="color: white;">Forget Your Password?</font></a>
					<script>
						function myAlert()
							{
								alert("Dear Student,\nKindly Visit Block 32-101 For Password Reset");
							}
					</script>
				</div>
			</div>
		</div>
	</div>
</div>
						</div>
					</section>
			</div>

		<!-- Scripts -->
			<script src="js/spjquery.min.js"></script>
			<script src="js/spbreakpoints.min.js"></script>
			<script src="js/spmain.js"></script>
			<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
</script>

	</body>
</html>
