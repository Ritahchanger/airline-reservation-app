<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$database="airline";

$query = "CREATE DATABASE IF NOT EXISTS $database";


if($conn->query($query)===True){
    $conn->select_db($database);
       $query="CREATE TABLE IF NOT EXISTS `flights`(
        flight_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
        fname varchar(200) not null,
        lname varchar(200) not null,
        email varchar(200) not null,
        towhere varchar(200) not null,
        passengertype varchar(200) not null,
        waytype varchar(200) not null,
        flightday date not null,
        returnday date not null,
        viptype varchar(100) not null,
        ticketnumber varchar(200) not null
       );";
       $conn->query($query);
}else{
    echo "Error creating database ".$conn->error;
}


?>