<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Arrays Associative PHP"; ?></title>
</head>
<body>

<?php

    $number = array('juanita', 'maria', 'jose');

    print_r($number);

    // echo $number[2] . "<br/>";

    echo "<br/>";


    $names = array("first_name" => 'Edwin', "last_name" => 'Diaz');

    // print_r($names);

    echo $names["first_name"] . " " . $names["last_name"];
?>
</body>
</html>