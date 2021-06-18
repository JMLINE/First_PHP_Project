<?php 
session_start();

    include("dbConnection.php");
    include("functions.php");

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //something was posted

        $user_name = $_POST['user_name'];
        $password =  $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
                //save to database
                $user_id = random_num(20);
                $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

                mysqli_query($con, $query);

                header("Location: login.php");
                die;

        }else{
            echo "Please enter valid info";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
<style type ="text/css">
.text{
    height: 25px;
    border-radius: 5px;
    padding: 4px;
    border: solid thin #aaa;
    width: 100%;
}

.button{
    display: flex;
    justify-content: center;
    color: white;
    background-color: green;
    border: 2pt solid black;

}
a{
    text-decoration: none;
}

.box{
    background-color: grey;
    margin: auto;
    width: 300px;
    padding: 20px
}

</style>
  <div class = "box">
  
  <form method="post">
    <div style = "font-size: 20px; margin: 10px;color: white">Signup</div>
    <input type = "text" name="user_name" class = "text"><br><br>
    <input type = "password" name="password" class="text"><br><br>

    <input type = "submit" value="signup"><br><br>

    <a href="login.php" class = "button">Click to Login</a>
  </form>
  
  </div>
</body>
</html>