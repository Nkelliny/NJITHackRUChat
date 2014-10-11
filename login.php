<?php
include("sqlconnect.php");

function Login()
{
	session_start();
	if(!empty($_POST['Username']))
{
	$query=mysql_query("SELECT*FROM members where username='$_POST[username]' ADN pass='$[password]'") or die(mysql_error());
	$row=mysql_fetch_array($query)or die(mysql_error());
	if(!empty($row['username']) AND !empty($row['pass']))
	{
		$_SESSION['username'] = $row['password'];
		 echo "Either Username or Password is incorrect.";
	}
	else
	{
		echo "Welcome '$username"';	
	}
	}
	if(isset($_POST['submit']))
	{
		Signin();
	}
}
}
?>
