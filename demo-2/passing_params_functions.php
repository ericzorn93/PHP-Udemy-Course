<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Params &amp; Functions PHP</title>
</head>
<body>

<?php

function greeting($message) {
    echo $message;
}

greeting("Hi Customer how are you?");



function addNumbers($number1, $number2) {

    $sum = $number1 + $number2;

    echo $sum;

}

addNumbers(345, 3462);



?>


</body>
</html>