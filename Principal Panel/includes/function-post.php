<?php 
/*for checking the system input is empty orr not*/
function emptyInputPost($fullname,$heading,$content,$profile,$post) {

$results;

if (empty($fullname) || empty($heading) || empty($content) || empty($post)) {
        $results==true;
    }
    else{
        $results=false;
    }
    return $results;
}

function createPost($conn,$fullname,$heading,$content,$profile,$post) {

    $sql = "INSERT INTO announcement (full_name,heading,content,files,Post) VALUES (?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../Post.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"sssss",$fullname,$heading,$content,$profile,$post);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Post.php?error=none");
    exit();
}
/*Functions for login*/





