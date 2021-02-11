<?php

session_start();
header('location:http://localhost/BCC%20Software/');

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "Connection Sucessful";
}
else{
	echo "Opps";
}

mysqli_select_db($con, 'bcc_web');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = " select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['user'] = $name;

}
else{
	$qy = " insert into signin(name , password) values ('$name' , '$pass') ";
	mysqli_query($con, $qy);
}


?>