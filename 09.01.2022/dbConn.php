<?php

$db = mysqli_connect("localhost","root","","flora");  // database connection

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>