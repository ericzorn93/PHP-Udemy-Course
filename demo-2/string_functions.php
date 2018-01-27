<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String Functions PHP</title>
</head>
<body>


<?php

    $string = "Hello student do you like the class";

    // String Length
    echo strlen($string);

    echo "<br/>";

    // Converts String to Uppercase
    echo strtoupper($string);

    echo "<br/>";

    // Converts String to Lowercase
    echo strtolower($string);

    echo "<br/>";

    // Calculates the crc32 polynomial of a string
    $checksum = crc32($string);

    printf("%u\n", $checksum);

?>

</body>
</html>