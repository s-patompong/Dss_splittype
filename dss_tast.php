<?php

require_once __DIR__ . "/config.php";

$id = $_GET['id'];
$level_id = $_GET['level_id'];
$room_no = $_GET['room_no'];
$cool_temp = $_GET['cool_temp'];
$humidity = $_GET['humidity'];
$room_temp = $_GET['room_temp'];
$volt_cool = $_GET['volt_cool'];
$current_cool = $_GET['current_cool'];
$current_hot = $_GET['current_hot'];
$wind_speed = $_GET['wind_speed'];
$performance = $_GET['performance'];
$power_status = $_GET['power_status'];

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

$sql = "INSERT INTO status_airs (id,level_id,room_no,cool_temp,humidity,room_temp,volt_cool,current_cool,current_hot,wind_speed,performance,power_status) 
VALUES ($id,$level_id,'$room_no',$cool_temp,$humidity,$room_temp,$volt_cool,$current_cool,$current_hot,$wind_speed,$performance,'$power_status');";

if ($conn->query($sql) === true) {
    echo "save OK";
} else {
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>
