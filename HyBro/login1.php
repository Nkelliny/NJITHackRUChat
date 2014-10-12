<?php
define('DB_HOST', 'sql2.njit.edu');
define('DB_NAME', 'ko45');
define('DB_USER','ko45');
define('DB_PASSWORD','obscene78');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function SignIn()
{
session_start();   
if(!empty($_POST['Email']))   
{
	$query = mysql_query("SELECT *  FROM Users where username = '$_POST[Email]' AND pass = '$_POST[Password]'") or die(mysql_error());
	$row = mysql_fetch_array($query) or die(mysql_error());
	if(!empty($row['userName']) AND !empty($row['pass']))
	{
		$_SESSION['username'] = $row['Password'];
			echo "Please recheck your Username and Password.";

	}
	else
	{
		    echo "Please recheck your Username and Password.";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>

