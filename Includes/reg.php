<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'moon_db');

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $passhash = password_hash($password, PASSWORD_DEFAULT);

    $s = "SELECT*FROM users_table WHERE name = '$name'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {

        $_SESSION['msg'] = "username is already taken!";
        header('Location:../sections/register.php');
    } else {
        $insert = "INSERT INTO users_table(name,email,password) VALUES('$name', '$email', '$passhash')";
        mysqli_query($conn, $insert);
        $_SESSION['msg'] = "Account created Successfully ";
        header('Location:../sections/login.php');
    }
}
