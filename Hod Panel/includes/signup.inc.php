<?php 

if (isset($_POST["submit"])) {
	$fullname=$_POST["full_name"];
	$email=$_POST["email"];
	$Mobile=$_POST["Mobile"];
	$password=$_POST["password"];
	$password1=$_POST["password1"];

	require_once "dbh.inc.php";
	require_once "functions.inc.php";

	if (emptyInputSignup($fullname,$email,$Mobile,$password,$password1) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidName($fullname) !== false) 
	{
		header("location: ../signup.php?error=invalidName");
		exit();
	}
	if (invalidEmail($email) !== false) 
	{
		header("location: ../signup.php?error=invalidEmail");
		exit();
	}
	if (pwdMatch($password,$password1) !== false) 
	{
		header("location: ../signup.php?error=passwordNotMatch");
		exit();
	}
	/*Already exist checking*/
	if (emailExist($conn,$email) !== false) 
	{
		header("location: ../signup.php?error=emailTakan");
		exit();
	}
	if (mobileExist($conn,$Mobile) !== false) 
	{
		header("location: ../signup.php?error=MobileTakan");
		exit();
	}

	createUser($conn,$fullname,$email,$Mobile,$password);

}
else{
	header("location: ../signup.php");
	exit();
}



