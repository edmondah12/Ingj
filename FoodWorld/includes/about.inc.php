<?php
if(isset($_POST['dergo'])){

    require_once 'conn.php';
    require_once 'function.php';

    $emri = $_POST["emri"];
    $mbiemri = $_POST["mbiemri"];
    $email = $_POST["email"];
    $Shteti = $_POST["Shteti"];
    $Arsyeja = $_POST["Arsyeja"];

    if($emri != "") {

        //konektimi i contact formes ne databazen "con".  
        $sql = "SELECT Emri FROM contact WHERE Emri=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../aboutus.php?error=sqlerror");
        exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $emri);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../aboutus.php?error=wrongemail&mail=".$email);
                exit();
            }
            else{
                //insertimi i te dhenave ne databaze "conect".
                $sql = "INSERT INTO contact (Emri, Mbiemri, Email,Shteti,Arsyeja) VALUES (?, ?, ?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../aboutus.php?error=sqlerror");
                    exit();
                    }
                    else{
                        //perfundimi i ekzekutimit te komandave perfaqesuse ne databaze dhe mesazhi success.
                        mysqli_stmt_bind_param($stmt, "sssss", $emri,$mbiemri, $email, $Shteti,$Arsyeja);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../aboutus.php?sent=success");
                        exit();

                    }
            }

        }
    }
}
