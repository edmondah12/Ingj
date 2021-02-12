<?php
if (isset($_POST['login-register'])) {
 
    require_once 'conn.php';
    require_once 'function.php';

    $Username = $_POST['name'];
    $password = $_POST['password'];
    //validimi i loginit ne te gjitha faqet e webit.
    if (empty($Username) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
   
    //konektimi i login formes ne databazen "users".  
    else {
        $sql = "SELECT * FROM register WHERE username=? OR Email=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
        }
        else {
         //validimi i passwordit te userit ne te gjitha faqet e webit.
            mysqli_stmt_bind_param($stmt, "ss", $Username, $Username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
               
                $pwdcheck = password_verify($password, $row['Passwordadd']);
                if ($pwdcheck == false){
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }
                else if ($pwdcheck == true){
                    //fillimi i session pasi useri ben login.
                    session_start();
                    $_SESSION['UserId']= $row['UserID'];
                    $_SESSION['username']= $row['username'];

                    header("Location: ../index.php?login=success");
                    exit();

                }
                //ridjetimet gjate perfundimit me sukses ose pa sukses te formes.
                else {
                    header("Location: ../index.php?error=wrongpassword");
                    exit();
                }

            }
            else{
                header("Location: ../index.php?error=nouser");
                exit();
            }
    }
    }
}
else {
    header("Location: ../index.php");
    exit();
}
