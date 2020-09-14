<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Form Data</title>
</head>

<body>

    <?php

    echo "<h1>";


    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "Mahmoud" && $_POST["password"] === "1234") {
            echo "Welcome";
        } else {
            echo "Wrong";
        }
    }

    echo "</h1>";
    ?>


    <form action="3-form.php" method="POST">
        <input type="text" placeholder="Username" name="username"><br>
        <input type="password" placeholder="Password" name="password"><br>
        <input type="submit" name="submit">
    </form>


</body>

</html>