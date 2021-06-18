<?php
// session_start();
ob_start();

include("dbConnection.php");
// include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //something was posted

    $name = $_POST['name'];
    $message =  $_POST['message'];
    if (!empty($name) && !empty($message)) {
        //save to database

        $query = "insert into guestbook (name, message) values ('$name', '$message')";

        mysqli_query($con, $query);
        header("Location:thank_you.php");
    } else {
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
    <title>Document</title>
</head>

<body>
    <style>
        .guestbook {
            background-image: url("./images/guest.jpg");
            margin: auto;
            width: 400px;
            padding: 20px;
            color: hotpink;
            text-align: center;
        }

        .text {
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        .text2 {
            height: 70px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

        #guestTitle {
            text-align: center;
            background-color: yellow;
            font-size: 30pt;
        }

        .messages {
            height: 250px;
            margin: auto;
            width: 400px;
            padding: 20px;
            background-color: grey;
            color: #39FF14;
            overflow-y: scroll;
            text-align: left;
            word-wrap: break-word;
            font-family: "Times New Roman", Times, serif;
        }

        .title {
            font-size: 30pt;

        }

        #nameTitle {
            color: yellow;
        }
    </style>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4"></div>
            <div class="col-lg-4">

                <form method="post">

                    <div class="guestbook">
                        <div class="title">Sign my Guestbook!!!</div>
                        <p style="color: yellow; background-color: black;">Name</p>
                        <input type="text" name="name" class="text"><br><br>
                        <p style="color: yellow; background-color: black;">Message</p>
                        <input type="text" name="message" class="text"><br><br>

                        <input type="submit" value="send"><br><br>
                    </div>
                </form>
                <div class="messages">

                    <?php ob_start();
                    $query2 = "SELECT id, name, message  FROM guestbook";
                    $results = $con->query($query2);

                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) {
                            echo "<br><u>" . $row["name"] . "</u>" . ":    " . "<i>" . "'" . $row["message"] . "</i>" . "'";
                        }
                    } else {
                        echo "0 Results";
                    }
                    $con->close();

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>