<?php
echo "<h1>";


if (isset($_POST["submit"])) {
    if ($_POST["username"] == "Mahmoud" && $_POST["password"] === "1234") {
        echo "Welcome";
    } else {
        echo "Wrong";
    }
} else {
    echo "Method not allowed !";
}

echo "</h1>";
?>