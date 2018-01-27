<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Functions PHP</title>
</head>
<body>


<?php

    $list = [343,34,323,23,54,232,453];

    echo max($list);

    echo "<br/>";

    echo min($list);

    echo "<br/>";

    // Sorts the array to in value order
    sort($list);

    print_r($list);

?>

</body>
</html>