<?php

$file = "example.txt";


if ($handle = fopen($file, 'w')) {


    fwrite($handle, 'I love PHP');


    //Close Document
    fclose($handle);

} else {

    echo "The application was not able to write on the file";
}



?>