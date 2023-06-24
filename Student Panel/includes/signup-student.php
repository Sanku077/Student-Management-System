<?php 

if (isset($_POST["Submit"])) {
	$fullname=$_POST["full_name"];
	$DOB=$_POST["DOB"];
	$email=$_POST["email"];
	$Mobile=$_POST["Mobile"];
	$password=$_POST["password"];
	$password1=$_POST["password1"];
	$gender=$_POST["gender"];
	$profile=$_FILES["profile_image"];
	$sign=$_FILES["profile_sign"];
	$mother_tongue=$_POST["mother_tongue"];
	$religion=$_POST["religion"];
	$caste=$_POST["caste"];
	$sub_caste=$_POST["sub_caste"];
	$paddress=$_POST["paddress"];
	$taddress=$_POST["taddress"];
	$country=$_POST["country"];
	$state=$_POST["state"];
	$district=$_POST["district"];
	$pin=$_POST["pin"];
	$Branch=$_POST["Branch"];
	$AYear=$_POST["AYear"];


	/* For profile Image */
	$profileName = $_FILES['profile_image']['name'];
	$profileTempName = $_FILES['profile_image']['tmp_name'];
	$profileSize = $_FILES['profile_image']['size'];
	$profileError = $_FILES['profile_image']['error'];
	$profileType = $_FILES['profile_image']['type'];

	$profile_ext = explode('.', $profileName);
	$profileActualExt = strtolower(end($profile_ext));

	$allowArr = array('jpg','jpeg','png');
	if (in_array($profileActualExt, $allowArr)) {
		if ($profileError === 0 ) {
			if ($profileSize < 500000) {
				$profile_destination = 'upload_profile/'.$profileName;
				move_uploaded_file($profileTempName, $profile_destination);
			} else{
				header("location: ../Add-student.php?error=profilesize");
				exit();
			}
		} else{
			header("location: ../Add-student.php?error=profileerror");
			exit();
		}
	} else {
		header("location: ../Add-student.php?error=profiletype");
		exit();
	}

	/*Checking for the image of sign*/
	$signName = $_FILES['profile_sign']['name'];
	$signTempName = $_FILES['profile_sign']['tmp_name'];
	$signSize = $_FILES['profile_sign']['size'];
	$signError = $_FILES['profile_sign']['error'];
	$signType = $_FILES['profile_sign']['type'];

	$sign_ext = explode('.', $signName);
	$signActualExt = strtolower(end($sign_ext));

	$allowArr = array('jpg','jpeg','png');
	if (in_array($signActualExt, $allowArr)) {
		if ($signError === 0 ) {
			if ($signSize < 500000) {
				$sign_destination = 'upload_sign/'.$signName;
				move_uploaded_file($signTempName, $sign_destination);
			} else{
				header("location: ../Add-student.php?error=profilesize");
				exit();
			}
		} else{
			header("location: ../Add-student.php?error=profileerror");
			exit();
		}
	} else {
		header("location: ../Add-student.php?error=profiletype");
		exit();
	}

	require_once "dbh.inc.php";
	require_once "function-student.php";

	if (emptyInputSignup($fullname,$DOB,$email,$Mobile,$password,$password1,$gender,$profile_destination,$sign_destination,$mother_tongue,$religion,$caste,$sub_caste,$paddress,$taddress,$country,$state,$district,$pin,$Branch,$AYear) !== false) {
		header("location: ../Add-student.php?error=emptyinput");
		exit();
	}
	if (invalidName($fullname) !== false) 
	{
		header("location: ../Add-student.php?error=invalidName");
		exit();
	}
	if (invalidEmail($email) !== false) 
	{
		header("location: ../Add-student.php?error=invalidEmail");
		exit();
	}
	if (pwdMatch($password,$password1) !== false) 
	{
		header("location: ../Add-student.php?error=passwordNotMatch");
		exit();
	}
	/*Already exist checking*/
	if (emailExist($conn,$email) !== false) 
	{
		header("location: ../Add-student.php?error=emailTakan");
		exit();
	}
	if (mobileExist($conn,$Mobile) !== false) 
	{
		header("location: ../Add-student.php?error=MobileTakan");
		exit();
	}


	createUser($conn,$fullname,$DOB,$email,$Mobile,$password,$gender,$profile_destination,$sign_destination,$mother_tongue,$religion,$caste,$sub_caste,$paddress,$taddress,$country,$state,$district,$pin,$Branch,$AYear);

}
else{
	header("location: ../Add-student.php");
	exit();
}



