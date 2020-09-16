<?php

$file_name = "2-myfile.txt";

if ($file = fopen($file_name, "w")) {

    fwrite($file, "I love php !");
    fclose($file);

} else {

    echo "Can not open the file '$file_name'";
    
}
