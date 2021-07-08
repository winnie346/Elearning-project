<?php
session_start();



if (isset($_POST['enroll'])) {


    $conn = mysqli_connect('localhost', 'root', '', 'moon_db');

    $course = $_POST['course'];
    $course_id = $_POST['course_id'];
    $user_id = $_SESSION['user_id'];

    $s = "SELECT * FROM my_courses where course_id = $course_id and user_id = $user_id";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);

    if ($num > 0) {

        $_SESSION['msg'] = "You are already enrolled!!";
        header("location:../sections/enrollcourse.php");
        exit();
    }

    $insert = "INSERT INTO my_courses(course, course_id, user_id) VALUES('$course', '$course_id','$user_id  ')";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        $_SESSION['msg'] = "Enroll Successfully !!";
        header("location:../sections/dashboard.php");
    } else {
        $_SESSION['msg'] = "course enroll failed !!";
        header("location:../sections/enrollcourse.php");
    }
}
