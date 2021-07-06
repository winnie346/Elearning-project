<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moon|elearning system</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!--=======fontawesome css========-->
    <link rel="stylesheet" href="./css/all.min.css">
    <!--=======styles css========-->
    <link rel="stylesheet" href="../css/styles.css">


    </style>

</head>

<body>
    <main>
        <div class=" main-area container pt-4 bg-light" style="height:200px">

            <div class="login-area col-md-6 col-sm-12  container">
                <div class="text-area">

                    <p class="text-white">
                    <h3 class="text-uppercase">welcome back!</h3>
                    <span class="pt-3">Make sure you enter the correct username and password.</span>
                    </p>

                </div>
                <br>

                <div class="input-area container-fluid">
                    <div class="row row-flex">


                        <div class="inner-area col-lg-6 col-md-6 col-sm-12">
                            <div class="image">
                                <figure class="snip0019">

                                    <img src="../images\student.jpg" alt="sample11" / " class=" image-fluid">
                                    <figcaption>
                                        <div>
                                            <p class="text-uppercase">
                                                build your career with moon.
                                            </p>
                                        </div>
                                    </figcaption>

                                </figure>

                            </div>
                        </div>

                        <div class="column  col-md-6 col-ms-12 pt-2">
                            <form action="../Includes/log.php" method="POST">

                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">


                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control " id="exampleInputPassword1">
                                <input type="checkbox" onclick=" showpassword()"> <span>Show Password</span>

                                <br>
                                <!--  &nbsp; &nbsp; &nbsp; <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>--><br>
                                &nbsp; <a href="./forget.php">Forgot password</a>
                                <br>
                                <button type="submit" name="submit" class="btn button-primary mt-3">Login</button>

                                <div class="text-right pt-4">
                                    <a class="txt2" href="register.php">
                                        Create your Account
                                        <i class="fa fa-arrow text-dark"></i>
                                    </a>
                                </div>
                            </form>

                            <?php

                            if (isset($_GET["newpass"])) {
                                if ($_GET["newpass"] == "success") {
                                    echo '<p class="signupsuccess"> Your password has been reset successfully</p>';
                                }
                            }
                            ?>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </main>


    <script>
        function showpassword() {
            var x = document.getElementById("exampleInputPassword1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>



    <!-- ======= bootstrap jquery script======== -->
    <script src="./js/jquery.3.5.1.js"></script>
    <!-- bootstrap js -->
    <script src="./js/bootstrap.min.js"></script>
    <!-- =======js script======== -->
    <script src="./js/script.js"></script>

</body>

</html>