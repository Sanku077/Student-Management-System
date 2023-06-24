<?php 
/*for checking the system input is empty orr not*/
function emptyInputSignup($fullname,$email,$Mobile,$DOB,$Gender,$paddress,$taddress,$password,$password1,$AYear,$Branch,$profile_destination) {

$results;

if (empty($fullname)  || empty($email) || empty($Mobile) || empty($DOB) || empty($Gender) || empty($paddress) || empty($taddress) || empty($password) || empty($password1) || empty($AYear) || empty($Branch) || empty($profile_destination)) {
        $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

/*for checking valid full name*/
function invalidName($fullname) {
$results;
if (preg_match("/^[a-zA-Z]*$/", $fullname)) {
    $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

/*for checking valid email*/
function invalidEmail($email) {
$results;
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

/*for checking valid password*/
function pwdMatch($password,$password1) {
$results;
if ($password !== $password1) {
    $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

/* Ifff already Email taken*/
function emailExist($conn,$email) {

    $sql = "SELECT * FROM staff_data WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-staff.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $results = false;
        return $results;
    }
    mysqli_stmt_close($stmt);
}
/*Branch Taken*/


/*Mobile Exit*/
function mobileExist($conn,$Mobile) {

    $sql = "SELECT * FROM staff_data WHERE Mobile=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-staff.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$Mobile);
    mysqli_stmt_execute($stmt);

    $resultData=mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $results = false;
        return $results;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn,$fullname,$email,$Mobile,$DOB,$Gender,$paddress,$taddress,$password,$password1,$AYear,$Branch,$profile_destination) {

    $sql = "INSERT INTO staff_data (full_name,email,Mobile,DOB,Gender,paddress,taddress,password,AYear,Branch,profile_image) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-staff.php?error=stmtfailed");
        exit();
    }

    $hashedpass = md5($password);

    mysqli_stmt_bind_param($stmt,"sssssssssss",$fullname,$email,$Mobile,$DOB,$Gender,$paddress,$taddress,$hashedpass,$AYear,$Branch,$profile_destination);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Manage-staff.php?error=none");
    exit();
}

/*Functions for login*/


