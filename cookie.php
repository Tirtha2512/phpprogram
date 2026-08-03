<?php
setcookie("username","atmiya",time()+3600);
if(isset($_COOKIE['username']))
{
	echo"cokkies is set for".$_COOKIE['username'];


}
else
{
	echo "cookies is not set";
}
?>