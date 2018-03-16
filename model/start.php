<?php
//Get form informations
$ip = $_POST["ip"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$duration = $_POST["duration"];
$protocol = $_POST["protocol"];
$server = "";//iperf server ip

include 'conection.php';

//Start iperf speed test
$comand = new conection($user,$pass,$ip,$server,$duration);

//show charts
include 'chart.php';
?>

