<?php 
session_start();
echo session_id();
echo "<br>";
if(isset($_POST['submit']))
{
	$_SESSION['username']=$_POST['username'];
	$_SESSION['pwd']=$_POST['pwd'];
		echo "<br>";
	echo"this is session variable";
		echo "<br>";
	print_r($_SESSION);
	echo "<br>";
	echo"after unset the session value";
		echo "<br>";
	unset($_SESSION['username']);
		echo "<br>";
	print_r($_SESSION);
		echo "<br>";
	//session_destroy();
}
?>
