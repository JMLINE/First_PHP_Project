<?php
session_start();

include("dbConnection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //something was posted

    $user_name = $_POST['user_name'];
    $password =  $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from database

        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }

        echo "Wrong username or password";
    } else {
        echo "Wrong username or password";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <style type="text/css">
        .text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        .button {
            /* padding: 10px;
    width: 100px; */
            text-align: center;
            color: white;
            background-color: green;
            border: none;



        }

        .button2 {
            display: flex;
            justify-content: center;
            color: white;
            background-color: blue;
            border: 2pt solid black;
        }

        a {
            text-decoration: none;

        }

        .box {
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px
        }
    </style>
    <div class="box">

        <form method="post">
            <div style="font-size: 20px; margin: 10px;color: white">Login</div>
            username
            <input type="text" name="user_name" class="text"><br><br>
            password
            <input type="password" name="password" class="text"><br><br>

            <input type="submit" value="Login"><br><br>

            <a href="signup.php" class="button2">Click to Signup</a>
        </form>
        <p>Use the following info to login in or create your own account!</p>
        <p>username: tester1</p>
        <p>password: password</p>

    </div>
</body>

</html>