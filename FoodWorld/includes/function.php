<?php
$result;
function passwordMatch($password,$passwordRepeat){
    if($password!==$passwordRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function emriexists($conn,$emri,$email){
    $sql = "SELECT * FROM register WHERE Firstname = ? or Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup.php?error=failed");
        exit();

    }
    mysqli_stmt_bind_param($stmt,"ss",$emri,$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    $result=false;
    return $result;
}
function createUser($conn,$emri,$mbiemri,$username,$email,$password){
    $sql = "INSERT INTO register (Firstname,LastName,username,Email,Passwordadd) VALUES(?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: ../signup.php?error=failed");
        exit();

    }
    $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$emri,$mbiemri,$username,$email,$hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../signup.php?error=successRegisterd");
    exit();
}
?>