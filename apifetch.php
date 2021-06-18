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
        font-size: 15pt;
        text-align: center;
        /* margin: 20px; */
        color: white;
        width: 100%;


    }

    .container1 {

        padding: 10px;
        text-align: center;
        display: flex;
        justify-content: center;
        margin-bottom: 10px;

    }

    #kitty {
        width: 150px;
        padding: 10px;
    }
    </style>
    <div class="container1">
        <pre>
        <?php

        $results = file_get_contents("http://dog-facts-api.herokuapp.com/api/v1/resources/dogs?number=1");

        function isJSON($results)
        {
            is_string($results) && is_array(json_decode($results, true)) ? true : false;
            if (json_decode($results === false)) {
                echo ("Not a JSON");
            } else {
                echo ("JSON");
            }
        }
        $my_random_number = rand(0, 4);
        $my_new_array = json_decode($results);
        // print_r($results);
        // echo $my_new_array[0]->fact;

        echo wordwrap('<div class = "wrapper">' .  '<h4>Dog Facts!</h4>' .
            '<img src = "./images/doggo2.png" id = "kitty"><br><br>' .
            $my_new_array[0]->fact, $width = 30, $break = "\n", $cut_long_words = true . '<hr/></div>');

        ?>
</pre>
    </div>
    <hr />
</body>

</html>