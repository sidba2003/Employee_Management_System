<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "ems";


$conn = new mysqli($servername, $dBUsername, $dbPassword, $dBName);

if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
} else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('inside database!!');
    </SCRIPT>");
}

?>