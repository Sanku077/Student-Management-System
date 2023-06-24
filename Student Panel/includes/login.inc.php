<?php

if (isset($_POST["submit"])) {
 	
 	require_once "dbh.inc.php";
 	$email = $_POST["email"];
 	$password = $_POST["password"];

 	if (empty($email) || empty($password)) {
 		header("location: ../login.php?error=emptyfield");
 		exit();
 	} else {
 		$sql = "SELECT * FROM student_data WHERE email = ? OR Mobile = ?";
 		$stmt  = mysqli_stmt_init($conn);
 		if (!mysqli_stmt_prepare($stmt,$sql)) {
 			header("location: ../login.php?error=sqlError");
 			exit();
 		} else {
 			mysqli_stmt_bind_param($stmt,"ss",$email,$email);
 			mysqli_stmt_execute($stmt);
 			$result = mysqli_stmt_get_result($stmt);
 			if ($row = mysqli_fetch_assoc($result)) {
 				
 					$passCheck = md5($password);
 					if ($passCheck != $row['password']) {
 						header("location: ../login.php?error=wronginput");
 						exit();
 					} else if ($passCheck == $row['password']) {
						session_start();
						$_SESSION["id"] = $row["id"];
						$_SESSION["email"] = $row["email"];
						$_SESSION["full_name"] = $row["full_name"];
						$_SESSION["Mobile"] = $row["Mobile"];
						$_SESSION["DOB"] = $row["DOB"];
						$_SESSION["mother_tongue"] = $row["mother_tongue"];
						$_SESSION["religion"] = $row["religion"];
						$_SESSION["caste"] = $row["caste"];
						$_SESSION["sub_caste"] = $row["sub_caste"];
						$_SESSION["district"] = $row["district"];
						$_SESSION["state"] = $row["state"];
						$_SESSION["country"] = $row["country"];
						$_SESSION["pin"] = $row["pin"];
						$_SESSION["gender"] = $row["gender"];
						$_SESSION["paddress"] = $row["paddress"];
						$_SESSION["taddress"] = $row["taddress"];
						$_SESSION["Branch"] = $row["Branch"];
						$_SESSION["AYear"] = $row["AYear"];
						$_SESSION["profile_image"] = $row["profile_image"];
						header("location: ../index.php");

 					} else {
 						header("location: ../login.php?error=errorlogin");
 						exit();
 					}

 			} else {
 				header("location: ../login.php?error=noUserfound");
 				exit();
 			}
 		}
 	}

 } else{
 	header("location: ../login.php");
	exit();
 }