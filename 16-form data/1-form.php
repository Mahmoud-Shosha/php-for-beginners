<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Form Data</title>
</head>

<body>

    <?php

    echo "<h1>";

    print_r($_POST);

    if (isset($_POST["submit"])) {
        echo "Works !";
    }

    echo "</h1>";
    ?>


    <form action="1-form.php" method="POST">
        <input type="text" placeholder="Username"><br>
        <input type="password" placeholder="Password"><br>
        <input type="submit" name="submit">
    </form>


</body>

</html>