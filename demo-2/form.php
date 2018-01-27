<?php

    $submit_button = $_POST["submit"];

    if (isset($submit_button)) {
        $names = array('Edwin', 'Peter', 'Samid', 'Mohad', 'Maria', 'Jane', 'Tom');
        $minimum = 5;
        $maximum = 10;
        $username = $_POST["username"];
        $password = $_POST["password"];

        /*
        echo "Hello " . $username . "<br/>";
        echo "Your password is  " . $password . "<br/>";
        */

        // Tests Username Length to be less than 5
        if (strlen($username) < $minimum) {
            echo "Username has to be longer than five";
        }

        // Tests Username Length to be more than 10
        if (strlen($username) > $maximum) {
            echo "Username cannot be longer than ten";
        }

        // Tests to see if Username entered is in names array
        if (!in_array($username, $names)) {
            echo "<br>" . "Sorry, you are not allowed";
        } else {
            echo "<br>" . "Welcome";
        }

    }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form PHP</title>
</head>
<body>


<form action="form.php" method="post">
    <input type="text" placeholder="Enter Username" name="username">
    <input type="password" placeholder="Enter Password" name="password"><br/>
    <input type="submit" name="submit">
</form>

</body>
</html>