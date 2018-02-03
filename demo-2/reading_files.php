<?php

$file = "example.txt";


if ($handle = fopen($file, 'r')) {


    $content = fread($handle, filesize($file)); // Each bit equals a character


    echo $content;

    //Close Document
    fclose($handle);

} else {

    echo "The application was not able to write on the file";
}



?>