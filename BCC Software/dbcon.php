<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "bcc_web";

$con = mysqli_connect($server,$user,$password,$db);

if ($con) {
	echo "Connection Success";
}
else{
	echo "No Connection";
}

?>