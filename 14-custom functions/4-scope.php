<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Scope</title>
</head>

<body>

    <?php

    echo "<h1>";

    $x = "global";
    function func()
    {
        $x = "local";
        echo $x . "<br>";
    }
    echo $x . "<br>";
    func();
    echo $x . "<br>";

    echo "<br><br>";

    $x = "global";
    function func2()
    {
        global $x;
        $x = "local";
        echo $x . "<br>";
    }
    echo $x . "<br>";
    func2();
    echo $x . "<br>";

    echo "<br><br>";

    $x = "global";
    function func3()
    {
        global $x; // you must declare global to read or write the gloal variable
        echo $x . "<br>";
    }
    echo $x . "<br>";
    func3();
    echo $x . "<br>";






    echo "</h1>";
    ?>


</body>

</html>