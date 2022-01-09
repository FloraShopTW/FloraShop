<?php

$db = mysqli_connect("localhost","root","","flora");  // database connection
$db->set_charset("utf8");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>