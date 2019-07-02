<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "storyline";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if(!$conn)
{
	die("Connection failed");
}