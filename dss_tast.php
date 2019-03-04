<?php
    $id = $_GET['id'];
	$level_id = $_GET['level_id'];
	$room_no = $_GET['room_no'];
	$cool_temp = $_GET['cool_temp'];
	$humidity = $_GET['humidity'];
	$room_temp = $_GET['room_temp'];
    $volt_cool= $_GET['volt_cool'];
	$current_cool= $_GET['current_cool'];
	$current_hot= $_GET['current_hot'];
	$wind_speed= $_GET['wind_speed'];
	$performance= $_GET['performance'];
	$power_status= $_GET['power_status'];

	$servername = "172.104.50.208";
    $username = "ma";
    $password = "Hr9zHdVn";
    $dbname = "ma";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO status_air (id,level_id,room_no,cool_temp,humidity,room_temp,volt_cool,current_cool,current_hot,wind_speed,performance,power_status) 
VALUES ($id,$level_id,$room_no,$cool_temp,$humidity,$room_temp,$volt_cool,$current_cool,$current_hot,$wind_speed,$performance,$power_status);";

if ($conn->query($sql) === TRUE) {
    echo "save OK";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
