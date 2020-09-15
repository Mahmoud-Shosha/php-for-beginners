<?php

$name = "my_cookie";
$value = 512;
$expiration = time() + (60*60*24*7);
$path = "/";

setcookie($name, $value, $expiration, $path);

// if the cookie already exist, it will update it (the expiration date)

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>Setting cookie</title>
</head>

<body>


</body>

</html>