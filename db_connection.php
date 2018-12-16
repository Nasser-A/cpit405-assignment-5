<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "nasseralabdali";
$password = "";
$database = "cpit405-assignment5";

$dbconn = new mysqli($servername, $username, $password, $database);

// check the connection
if ($conn->connect_error) {
    // exit and kill this process
    echo "Failed to connect to database!";
    die("Connection failed: ");
}

?>
