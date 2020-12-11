<?php
ob_start(); //Turn on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");

$con = mysqli_connect("localhost", "root", "", "social");

// TO CHECK CONNECTION
if(mysqli_connect_errno())
{
	echo "failed to connect" . mysqli_connect_errno();
}
/*else
{
	echo "success";
}
*/

?>