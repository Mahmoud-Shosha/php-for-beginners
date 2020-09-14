<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Defining functions</title>
</head>

<body>

    <?php

    echo "<h1>";


    init();

    function init()
    {
        greet();
        display_temperature();
    }

    function greet ()
    {
        echo "Hello<br>";
    }

    function display_temperature()
    {
        echo 26;
    }



    echo "</h1>";
    ?>


</body>

</html>