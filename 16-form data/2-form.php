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

    if (isset($_POST["submit"])) {  // check POST request
        echo "Hello, " . $_POST["username"] . ", Your password is " . $_POST["password"];
    }

    echo "</h1>";
    ?>


    <form action="2-form.php" method="POST">
        <input type="text" placeholder="Username" name="username"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" name="submit">
    </form>


</body>

</html>