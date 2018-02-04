<?php
/**
 * Database Connection for CMS Application.
 * User: ericzorn
 * Date: 2/3/18
 * Time: 10:49 PM
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "root";
$db['db_name'] = "cms";

// Loop Through Local Host Array and create constant variables
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}


// Database Connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


if ($connection) {
    echo "We are connected";
}

?>