<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For-Each Loops PHP</title>
</head>
<body>

<?php

    $numbers = array(345, 397, 676, 385, 2657, 5784);

    foreach ($numbers as $number) {
        echo $number . "<br/>";
    }
?>

</body>
</html>