<?php 

if (isset($_POST["submit"])) {
	$email = $_POST["email"];

	require_once "dbh.inc.php";
	require_once "functions.inc.php";

	if (emptyInputforget($email) !== false) {
		header("location: ../otp_verify.php?error=emptyinput");
		exit();
	}
	else if (emailExistforget($conn,$email) !== false) {
		header("location: ../otp_verify.php?error=UserNotFound");
		exit();
	}
	else {
			$random_token = rand(100000,999999);
			$ret=mysqli_query($conn,"UPDATE admin_data SET otp = '$random_token' WHERE email='$email'");
			$to = "$email";
			$subject = "My subject";
			$txt = "Hello world! Your Otp for Reseting password is $random_token";
			$headers = "From: ssmangle1234@gmail.com" . "\r\n" .
			"CC: ssmangle1234@gmail.com";
			mail($to,$subject,$txt,$headers);
			session_start();
			$_SESSION['email'] = $email;
			header("location: ../otp_verify.php?error=Success");
		}
		
}

else{
	header("location: ../login.php");
	exit();
}



