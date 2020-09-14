<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Associative Arrays</title>
</head>

<body>

    <?php

    echo "<h1>";


    $student = array("name" => "Mahmoud", "age" => 23);

    echo $student["name"] . " is " . $student["age"] . " years old<br>";

    print_r($student);

    echo "<br><br>";

    $another_student = ["name" => "Mahmoud", "age" => 23];

    echo $another_student["name"] . " is " . $another_student["age"] . " years old<br>";

    print_r($another_student);





    echo "</h1>";
    ?>


</body>

</html>