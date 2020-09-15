<?php

print_r($_POST);
echo "<br>";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>$_POST super global</title>
</head>

<body>

    <form action="2-post_super_global.php" method="POST">
        <input type="text" name="username">
        <input type="submit">
    </form>


</body>

</html>