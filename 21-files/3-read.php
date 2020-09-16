<?php

$file_name = "3-myfile.txt";

if ($file = fopen($file_name, "r")) {

    echo $content = fread($file, 4) . "<br><br>";
    rewind($file);
    echo $content = fread($file, filesize($file_name)) . "<br><br>";
    fclose($file);

} else {

    echo "Can not open the file '$file_name'";
    
}
