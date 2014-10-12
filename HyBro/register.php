<?php

include ('sqlconnect.php');

if ($_SERVER ['REQUEST_METHOD']== POST){

//get user input
$f_id = $_POST['ID'];
$f_username= $_POST['username'];
$f_password = $_POST['password'];

//create insert statement
$sql="INSERT INTO member(id, username, password, email) 
		VALUES('$f_id', '$f_username', '$f_password', '$f_email')";

//print $sql;

$ins = mysql_query($sql);


if ($ins){

	print $f_name . " your account has been created.";
	header('Location:../admin.html');
}

die;


}


?>
