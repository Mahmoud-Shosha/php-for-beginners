<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Function return</title>
</head>

<body>

    <?php

    echo "<h1>";



    function sum ($num1, $num2)
    {
        return $num1 + $num2;
    }

    $result = sum(5, 3);

    echo $result . "<br>";

    $result = sum($result, 3);

    echo $result . "<br>";




    echo "</h1>";
    ?>


</body>

</html>