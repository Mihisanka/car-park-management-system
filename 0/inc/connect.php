<?php

$db_host		= 'db4free.net';
$db_user		= 'cpmsrun_2';
$db_pass		= 'password123@';
$db_database	= 'cpmstest_1'; 



$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$servername = "db4free.net";
$username = "cpmsrun_2";
$password = "password123@";
$dbname = "cpmstest_1";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$connect=mysqli_connect("db4free.net", "cpmsrun_2", "password123@", "cpmstest_1") or die(mysqli_error());

?>