<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Comparison operators</title>
</head>

<body>

    <?php

    echo "<h1>";


    if (4 > 5) echo "True" . "<br>"; // False
    else  echo "False" . "<br>";

    if (4 >= 5) echo "True" . "<br>"; // False
    else  echo "False" . "<br>";

    if (4 < 5) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (4 <= 5) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (4 != 5) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (5 == 5) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (5 == "5") echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (5 === 5) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (5 === "5") echo "True" . "<br>"; // False
    else  echo "False" . "<br>";

    if (5 !== "5") echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (5 !== 5) echo "True" . "<br>"; // False
    else  echo "False" . "<br>";

    echo "<br><br>";

    if (false && true) echo "True" . "<br>"; // False
    else  echo "False" . "<br>";

    if (false || true) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";

    if (!false && true) echo "True" . "<br>"; // True
    else  echo "False" . "<br>";






    echo "</h1>";
    ?>


</body>

</html>