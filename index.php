<?php
ob_start();

session_start();

include("dbConnection.php");
include("functions.php");

$user_data = check_login($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>My page</title>
</head>

<body>
    <style>
    body {
        text-decoration: none;
        background-image: url("./images/stars.jpg");
        background-repeat: repeat;
        color: white;
        font-family: "Comic Sans MS", "Comic Sans", cursive;

    }

    .logout {
        text-align: right;



    }

    .greeting {
        font-size: 45pt;
        text-align: center;
        transform: scaleY(1.5) skewY(-8deg) rotateZ(-3deg) translateZ(0);

        font-family: Impact, sans-serif;
        color: transparent;
        background: linear-gradient(to bottom left, #fee601, #fee601 15%, #fe4201);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        background-clip: text;

        z-index: -1;
        text-shadow: 1px 0 0 #813300, 0 1px 0 #c14d00, 2px 1px 0.35px #813300, 1px 2px 0.35px #c14d00, 3px 2px 0.35px #813300, 2px 3px 0.35px #c14d00, 4px 3px 0.35px #813300, 3px 4px 0.35px #c14d00, 5px 4px 0.35px #813300, 4px 5px 0.35px #c14d00, 6px 5px 0.35px #813300, 5px 6px 0.35px #c14d00, 7px 6px 0.35px #813300, 6px 7px 0.35px #c14d00;
    }

    button {
        background-color: red;
    }

    a {
        text-decoration: none;
    }

    .welcomeSign {
        text-align: right;
        font-size: 72px;
        background: linear-gradient(to right, #ee0606, #ee7206, #3aee06, #06eedf, #0617ee, #ee06da);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: "Comic Sans MS", "Comic Sans", cursive;
    }


    .counter {
        display: flex;
        justify-content: center;

    }

    /* .myLinks2{
    text-align: center;
} */
    .myLinks1 {
        text-align: center;
    }

    .myLinks1:hover {
        transform: scale(1.2);
    }

    .myLinks2:hover {
        transform: scale(1.2);
    }

    .favoriteMovies {
        text-align: center;
    }

    .myLinks3 {
        text-align: center;
    }

    .myLinks3:hover {
        transform: scale(1.2);
    }

    .friends {
        text-align: center;
    }

    .about {
        text-align: center;
    }

    .fire1 {
        z-index: 10000000;
        height: 50px;
        margin: 10px;
        animation: blinker .5s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }

    }

    .footer {
        text-align: center;
    }

    #banner {
        text-align: center;
        margin-left: 500px;

    }
    </style>

    <?php ob_start();
    include "sidenav.php";
    ?>
    <div class="logout"><button><a href="logout.php">Logout</a></button></div>
    <img src="./images/banner.png" id="banner">

    <div class="welcomeSign">Welcome to mykewlpage.com!</div>


    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-6 ">
                <img src="./images/fire.png" class="fire1">
                <img src="./images/fire.png" class="fire1">
                <img src="./images/fire.png" class="fire1">
                <img src="./images/fire.png" class="fire1">
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
    <marquee>This is the World Wide Web!!!!!!</marquee><br><br>

    <div class="container">
        <div class="row">
            <div class=col-lg-2></div>
            <div class=col-lg-4>

                <p class="greeting">Hi,
                    <?php echo $user_data['user_name']; ?>!


            </div>

            <div class=col-lg-5>
                <?php ob_start();
                include "apifetch.php";
                ?>

            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-2 about">About me<br><br>
                <a href="about_me.php"><img src="./images/saturn.png" class="myLinks1" target="blank"></a>
            </div>

            <div class="col-lg-2 favoriteMovies"> My favorite movies!!<br><br>
                <a href="movies.php"><img src="./images/rocket.png" class="myLinks2"></a>
            </div>

            <div class="col-lg-2 friends"> My friends<br><br><br>
                <a href="friends.php"><img src="./images/earff.png" class="myLinks3"></a>
            </div>
        </div>
    </div>

    <?php ob_start();
    include "guestbook.php";
    ?>

    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4 counter">Visitors<br>
                <script type="text/javascript" src="//counter.websiteout.net/js/2/0/0/0"></script>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
    <br>

    <div class="footer">myAwesomeSite © 1995 <br> webmaster@thisisareallyawesomesite.com</div>





    <br />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>