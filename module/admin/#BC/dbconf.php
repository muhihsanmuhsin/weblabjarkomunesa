<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$dbname = "dblabjarkom";

$mysqli = new mysqli($host,$user,$pwd,$dbname);
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>