<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "the_icon";

$conn = mysqli_connect($host,$user,$password,$database);

if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

?>