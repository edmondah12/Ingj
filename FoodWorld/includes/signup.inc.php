<?php
if (isset($_POST["signup-register"])) {
    

    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["KonfPassword"];

    require_once 'conn.php';
    require_once 'function.php';

    //validimi i signup formes ne signup.php.
    if(passwordMatch($password,$passwordRepeat) !==false){
    header("Location: ../signup.php?error=passwordsdontmatch");
    exit();
    }
    if(emriexists($conn,$emri,$email)!==false){
        header("Location: ../signup.php?error=usernametaken");
    exit();
    }


    createUser($conn,$emri,$mbiemri,$username,$email,$password);
}
else {
    header("location: ../signup.php");
    exit();
}