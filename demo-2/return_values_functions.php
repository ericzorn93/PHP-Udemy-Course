<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return Values PHP</title>
</head>
<body>

<?php


    function addNumbers($number1, $number2) {

        $sum = $number1 + $number2;

        return $sum;

    }

    $result = addNumbers(34, 64);

    echo $result; //98

    echo "<br>";

    $result = addNumbers(100, $result); //198

    echo $result;

    $result = addNumbers(10000, $result); //10198

    echo "<br>";

    echo $result;

?>


</body>
</html>