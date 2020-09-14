<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Function parameters</title>
</head>

<body>

    <?php

    echo "<h1>";


    greet("Sami");

    function greet ($user)
    {
        echo "Hello, " . $user;
    }




    echo "</h1>";
    ?>


</body>

</html>