<?php 
/*for checking the system input is empty orr not*/
function emptyInputSignup($fullname,$email,$Mobile,$password,$password1) {

$results;

if (empty($fullname) || empty($email) || empty($Mobile) || empty($password) || empty($password1)) {
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

    $sql = "SELECT * FROM admin_data WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
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

function mobileExist($conn,$Mobile) {

    $sql = "SELECT * FROM admin_data WHERE Mobile=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
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


function createUser($conn,$fullname,$email,$Mobile,$password) {

    $sql = "INSERT INTO admin_data (full_name,email,Mobile,password) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedpass = md5($password);

    mysqli_stmt_bind_param($stmt,"ssss",$fullname,$email,$Mobile,$hashedpass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=none");
    exit();
}

/*Functions for login*/

/*FUncation for forget password*/
function emailExistforget($conn,$email) {

    $sql = "SELECT * FROM hod_data WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        $results = true;
        header("location: ../otp_verify.php?error=UserNotFound");
        exit();
    }
    else {
        $results = false;
        return $results;
    }
    mysqli_stmt_close($stmt);
}


function emptyInputforget($email) {

$results;

if (empty($email)) {
        $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

/*Function for otp verification*/
