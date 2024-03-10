<?php

$dbHost = '127.0.0.1:4306:4306';
$dbUser = "root";
$dbPass = '';
$dbName = 'cms';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong. Database is not connected;");
}

?>