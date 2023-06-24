<?php 
/*for checking the system input is empty orr not*/
function emptyInputSignup($fullname,$DOB,$email,$Mobile,$password,$password1,$gender,$profile_destination,$sign_destination,$mother_tongue,$religion,$caste,$sub_caste,$paddress,$taddress,$country,$state,$district,$pin,$Branch,$AYear) {

$results;

if (empty($fullname) || empty($DOB) || empty($email) || empty($Mobile) || empty($password) || empty($password1) || empty($gender) || empty($profile_destination) || empty($sign_destination) || empty($mother_tongue) || empty($religion) || empty($caste) || empty($sub_caste) || empty($paddress) || empty($taddress) || empty($country) || empty($state) || empty($district) || empty($pin) || empty($Branch) || empty($AYear)) {
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

    $sql = "SELECT * FROM student_data WHERE email=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-student.php?error=stmtfailed");
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

    $sql = "SELECT * FROM student_data WHERE Mobile=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-student.php?error=stmtfailed");
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


function createUser($conn,$fullname,$DOB,$email,$Mobile,$password,$gender,$profile_destination,$sign_destination,$mother_tongue,$religion,$caste,$sub_caste,$paddress,$taddress,$country,$state,$district,$pin,$Branch,$AYear) {

    $sql = "INSERT INTO student_data (full_name,DOB,email,Mobile,password,gender,profile_image,profile_sign,mother_tongue,religion,caste,sub_caste,paddress,taddress,country,state,district,pin,Branch,AYear) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Add-student.php?error=stmtfailed");
        exit();
    }

    $hashedpass = md5($password);

    mysqli_stmt_bind_param($stmt,"ssssssssssssssssssss",$fullname,$DOB,$email,$Mobile,$hashedpass,$gender,$profile_destination,$sign_destination,$mother_tongue,$religion,$caste,$sub_caste,$paddress,$taddress,$country,$state,$district,$pin,$Branch,$AYear);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Manage-student.php?error=none");
    exit();
}

/*Functions for login*/


