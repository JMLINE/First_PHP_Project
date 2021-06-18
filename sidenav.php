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
    .wrapper {
        margin: 0;
        padding: 0;
    }

    .nav {
        position: fixed;
        overflow-y: scroll;
        width: 210px;
        height: 800px;
        /*background-color: #06e9ee;*/
        background-color: tan;
        background-image: url("./images/background.jpg");
        margin: 0px;
        z-index: 1000;
        /* padding: -1px; */

    }

    .linkHeader {
        font-size: 20pt;
        color: red;
    }

    #firstBtn {
        width: 100%;
        /*background-color: grey;*/
        /*color: black;*/
        text-decoration: none;
    }

    #new {
        color: blue;

        animation: rotation 4s infinite linear;
    }

    @keyframes rotation {
        from {
            transform: rotateY(0deg);
        }

        to {
            transform: rotateY(360deg);
        }

    }

    input {
        border-bottom: 2px solid black;
        border-right: 2px solid black;
        border-top: 2px solid white;
        border-left: 2px solid white;

    }

    input:hover {
        background-color: lightgrey;
    }
    </style>

    <div class="nav">
        <div class="container">

            <div class="linkHeader"><b><u>Cool Links!</u></b></div><br><br>

            <form action="https://aol.com" target="_blank">
                <input type="submit" value="www.AoL.com" />
            </form><br><br>

            <form action="https://yahoo.com" target="_blank">
                <input type="submit" value="www.YaHoo.com" />
            </form><br><br>

            <form action="https://ask.com" target="_blank">
                <input type="submit" value="www.AskJeeves.com" />
            </form><br><br>

            <form action="https://ebay.com" target="_blank">
                <input type="submit" value="www.eBaY.com" />
            </form><br><br>

            <p id="new">*****NEW!!!*****</p>
            <form action="https://amazon.com" target="_blank">
                <input type="submit" value="www.Amazon.com" />
            </form><br><br>

        </div>

    </div>
</body>

</html>