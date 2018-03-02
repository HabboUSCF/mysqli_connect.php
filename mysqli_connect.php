<?php

DEFINE ('DB_USER', 'newuser');
DEFINE ('DB_PASSWORD', 'Bricenasa1');
DEFINE ('DB_HOST', 'github');
DEFINE ('DB_NAME', 'USCF PTS (sakila)');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could Not Connect to MySQL' .
    mysqli_connect_error());

?>
