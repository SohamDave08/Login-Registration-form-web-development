<?php 


//DECLARING VARIABLES TO PREVENT ERRORS
$fname = "";  //First name
$lname = "";  //Last name
$em = "";  //email 
$em2 = "";  //email2
$pass = "";  //Password
$pass2 = "";  //Pasword2
$date = "";  //Sign up date
$error_array = array();  //Holds error messages


if(isset($_POST['reg_button']))
{
	//Registration form value

	//First name
	$fname = strip_tags($_POST['reg_fname']);  //Remove HTML tags
	$fname = str_replace(' ','',$fname);  //Remove Space
	$fname = ucfirst(strtolower($fname));  //Lower all letter and capitalise first 
	$_SESSION['reg_fname'] = $fname;  //Stores first name into session variable


	//Last name
	$lname = strip_tags($_POST['reg_lname']);  //Remove HTML tags
	$lname = str_replace(' ','',$lname);  //Remove Space
	$lname = ucfirst(strtolower($lname));  //Lower all letter and capitalise first 
	$_SESSION['reg_lname'] = $lname;  //Stores last name into session variable


	//Email
	$em = strip_tags($_POST['reg_email']);  //Remove HTML tags
	$em = str_replace(' ','',$em);  //Remove Space
	$em = strtolower($em);  //Lower all letter and capitalise first
	$_SESSION['reg_email'] = $em;  //Stores email into session variable 


	//Confirm Email
	$em2 = strip_tags($_POST['reg_email2']);  //Remove HTML tags
	$em2 = str_replace(' ','',$em2);  //Remove Space
	$em2 = strtolower($em2);  //Lower all letter and capitalise first 
	$_SESSION['reg_email2'] = $em2;  //Stores email2 into session variable


	//Password
	$pass = strip_tags($_POST['reg_pass']);  //Remove HTML tags 


	//Confirm password
	$pass2 = strip_tags($_POST['reg_pass2']);  //Remove HTML tags
	

	$date = date("y-m-d"); //Date


	//Confirm Email check
	if($em == $em2)
	{

		//Check if email is in valid format
		if(filter_var($em, FILTER_VALIDATE_EMAIL))
		{
			$em = filter_var($em, FILTER_VALIDATE_EMAIL);


			//Check if email already exists
			$e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$em'");


			//Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);

			if($num_rows > 0)
			{
				array_push($error_array, "Email already in use<br>");
			}
		}
	}
	else
	{
		array_push($error_array,"Emails don't match<br>");
	}




	if(strlen($fname) > 25 || strlen($fname) < 2)
	{
		array_push($error_array,"Your first name must be between 2 and 25<br>");
	}


	if(strlen($lname) > 25 || strlen($lname) < 2)
	{
		array_push($error_array,"Your last name must be between 2 and 25<br>");
	}


	if($pass != $pass2)
	{
		array_push($error_array, "Your password do not match<br>");
	}
	elseif(strlen($pass >30 || strlen($pass)<5))
	{
		array_push($error_array, "Your password must be between 5 and 30<br>");
	}
	else
	{
		if(preg_match('/[^A-Za-z0-9]/', $pass))
		{
			array_push($error_array,"Your password can only contain english characters and numbers<br>");
		}
	}


	if(empty($error_array))
	{
		$pass = md5($pass);  //Encrypt password before sending to database

		//Generate Username by concatinating first and last name

		$Username = strtolower($fname . "_" . $lname);
		$check_username_query = mysqli_query($con , "SELECT username FROM users WHERE username='$Username'");
		$i = 0;
		//if username exists add number to username

		while(mysqli_num_rows($check_username_query) != 0)
		{
			$i++; //Add 1 to i
			$Username = $Username . "_" . $i;
			$check_username_query = mysqli_query($con , "SELECT username FROM users WHERE username='$Username'");
		}


		//Profile picture assignment
		$random = rand(1,2); //Random number between 1 & 2

		if($random == 1)
			$profile_pic = "assets/images/profile_pics/defaults/head_pete_river.png";
		elseif($random == 2)
			$profile_pic = "assets/images/profile_pics/defaults/head_red.png";



		$query = mysqli_query($con, "INSERT INTO users VALUES ('', '$fname', '$lname', '$Username', '$em', '$pass', '$date', '$profile_pic', '0', '0', 'no', ',' )");
		

		array_push($error_array, "<span style='color: #14C800;'> <br>You're all set! Go ahead and Login! </span><br>");

		//clear session variables
		$_SESSION['reg_fname'] = "";
		$_SESSION['reg_lname'] = "";
		$_SESSION['reg_email'] = "";
		$_SESSION['reg_email2'] = "";


	}

}

?>