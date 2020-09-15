<?php

print_r($_GET);
echo "<br>";

$id = 125;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8>">
    <title>$_GET super global</title>
</head>

<body>

    <a href="1-get_super_global.php?id=<?php echo $id; ?>">Click here !</a>


</body>

</html>