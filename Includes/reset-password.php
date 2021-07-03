<?php

if (isset($_POST["reset-password-submit"])) {

    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pass"];
    $passwordRepeat = $_POST["pass-Repeat"];

    if (empty($password) || empty($passwordRepeat)) {

        header("Location: ../sections/create-new-password.php");
        exit();
    } elseif ($password != $passwordRepeat) {
        header("Location: ../sections/create-new-password.php");
        exit();
    }

    $currentDate = date("U");

    require 'connect.php';

    $sql = "SELECT * FROM passreset WHERE passResetSelector=? AND passResetExpires >= ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo "an error occured!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo " You need tp re-submit your reset request";
            exit();
        } else {

            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["passResetToken"]);

            if ($tokenCheck === false) {

                echo " You need tp re-submit your reset request";
                exit();
            }elseif($tokenCheck === true){

                $tokenEmail = $row['passResetEmail'];

                $sql = "SELECT * FROM users_table WHERE email=? ";
                $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo "an error occured!";
        exit();

    }else{
        mysqli_stmt_bind_param($stmt, "s", $tokenEmail );
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "There was an error";
            exit();
        } else {

            $sql = "UPDATE users_table SET password=? WHERE email=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
        
                echo "an error occured!";
                exit();
            } else {
                $newpassHash = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ss",$newpassHash, $tokenEmail);
                mysqli_stmt_execute($stmt);

                $sql = "DELETE FROM passreset WHERE passResetEmail=?";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
            
                    echo "an error occured!";
                    exit();
            
                }else{
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../sections/login.php?newpass=passwordupdated");
                    

                }

            }        

        }
    }
        }
    }
}
} else {
    header("Location: ../sections/login.php");
}

