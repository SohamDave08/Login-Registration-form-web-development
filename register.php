<?php

require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>

	<div class="login_box" id=login>
		

			<div class="first" id="first">
				<div class="login_header" id="login_header">
					<h1> Photogram </h1>
					<br>
					Login or sign up below!
					<br>
					<br>
					<br>
					<form action="register.php" method="POST" >
						<input type="email" name="log_email" placeholder="Email address" required>
						<br>
						<input type="password" name="log_pass" placeholder="Password" required>
						<br>
						
						<input type="submit" name="log_button" value="Login">

						<?php 
							if (in_array("Email or password was incorrect<br>", $error_array))
							{
								echo "Email or password was incorrect<br>";
							}
						?>
						<br>
						<br>
						<a href="#" id="signup" class="signup">Need an acount? Register here!</a>
					</form>
				</div>
			</div>
			


			<br><br>



			<div class="second" id="second">
				<div class="login_header" id="login_header">
					<h1> Photogram </h1>
					<br>
					Login or sign up below!
					<br>
					<br>
					<br>
					<form action="register.php" method="POST">
						<input type="text" name="reg_fname" placeholder="First Name" value="<?php 
							if(isset($_SESSION['reg_fname']))
							{
								echo $_SESSION['reg_fname'];
							}

						?>" required>
						<br>
						<?php
							if (in_array("Your first name must be between 2 and 25<br>", $error_array))
							{
								echo "Your first name must be between 2 and 25<br>";
							}
						 ?>

						<input type="text" name="reg_lname" placeholder="Last Name" value="<?php 
							if(isset($_SESSION['reg_lname']))
							{
								echo $_SESSION['reg_lname'];
							}

						?>" required>
						<br>
						<?php
							if (in_array("Your last name must be between 2 and 25<br>", $error_array))
							{
								echo "Your last name must be between 2 and 25<br>";
							}
						 ?>

						<input type="email" name="reg_email" placeholder="Email" value="<?php 
							if (isset($_SESSION['reg_email']))
							{
								echo $_SESSION['reg_email'];
							}

						?>" required>
						<br>


						<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
							if(isset($_SESSION['reg_email2']))
							{
								echo $_SESSION['reg_email2'];
							}

						?>" required>
						<br>
						<?php
							if (in_array("Email already in use<br>", $error_array))
							{
								echo "Email already in use<br>";
							}
							if (in_array("Emails don't match<br>", $error_array))
							{
								echo "Emails don't match<br>";
							}

						 ?>
						<input type="password" name="reg_pass" placeholder="Password" required>
						<br>
						<input type="password" name="reg_pass2" placeholder="Confirm Password" required>
						<br>

						<?php
							if (in_array("Your password do not match<br>", $error_array))
							{
								echo "Your password do not match<br>";
							}
							if (in_array("Your password must be between 5 and 30<br>", $error_array))
							{
								echo "Your password must be between 5 and 30<br>";
							}
							if (in_array("Your password can only contain english characters and numbers<br>", $error_array))
							{
								echo "Your password can only contain english characters and numbers<br>";
							}
						?>
						<input type="submit" name="reg_button" value="Register">
						<?php
						if (in_array("<span style='color: #14C800;'> <br>You're all set! Go ahead and Login! </span><br>", $error_array))
							{
								echo "<span style='color: #14C800;'> <br>You're all set! Go ahead and Login! </span><br>";
							}
						?>
						<br>
						<br>
						<a href="#" id="signin" class="signin">Already have an account? Sign in here!</a>
					</form>
				</div>
			</div>

	</div>


</body>
</html>