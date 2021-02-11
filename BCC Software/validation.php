<?php

session_start();

$con = mysqli_connect('localhost','root');
if ($con) {
	
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
	header('location:home.php');
}
else{
	 
	 echo "Please enter valid Username or Password";

}


?>