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
        echo "Username has to be longer than 5";
    }

    // Tests Username Length to be more than 10
    if (strlen($username) > $maximum) {
        echo "Username cannot be longer than 10";
    }

    // Tests to see if Username entered is in names array
    if (!in_array($username, $names)) {
        echo "<br>" . "Sorry, you are not allowed";
    } else {
        echo "<br>" . "Welcome";
    }

}


?>