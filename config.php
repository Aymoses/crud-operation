<?php

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "crud";

//creating connection
if(!$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname))
{

    die("failed to connect!");
}

//checking connection
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}
echo "Connected successfully";
?>