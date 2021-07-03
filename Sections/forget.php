<!DOCTYPE HTML>
<html>

<head>
    <style type="text/css">
        input {
            border: 1px solid olive;
            border-radius: 5px;
        }

        h1 {
            color: #111;
            font-size: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Forgot Password<h1>
            <form action='../Includes/reset.php' method='post'>

                <label for="email">Email</label>
                <input type='email' name='email' /><br><br>

                <button type="submit" name="request-submit">Reset password</button>



            </form>

            <?php

            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success") {
                    echo '<p class="signupsuccess"> Check your email </p>';
                }
            }
            ?>
</body>

</html>