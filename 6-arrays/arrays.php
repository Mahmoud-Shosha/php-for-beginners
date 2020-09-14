<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Arrays</title>
</head>

<body>

    <?php

    echo "<h1>";


    $my_list = array(5, 20, "we", 25.554);
    echo $my_list;
    echo "<br>";
    print_r($my_list); //Prints human-readable information about a variable
    echo "<br>";
    echo $my_list[1];
    echo "<br>";

    $my_other_list = [5, 20, "we", 25.554]; // Another new and common way
    echo $my_other_list;
    echo "<br>";
    print_r($my_other_list); //Prints human-readable information about a variable
    echo "<br>";
    echo $my_other_list[1];
    echo "<br>";
    echo "<br>";

    $num = 20;
    print_r($num);





    echo "</h1>";
    ?>


</body>

</html>