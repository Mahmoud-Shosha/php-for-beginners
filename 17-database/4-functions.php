<?php

function display_id_options()
{

    global $connection;

    $query = "SELECT * FROM users;";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query failed");
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        echo "<option value='$id'>$id</option>";
    }
}
