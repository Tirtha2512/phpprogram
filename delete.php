<?php
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	die("connection is not done");
}
$id=$_GET['id'];
$qry="delete From students where id=$id";

if(mysqli_query($con,$qry))
{
	echo "recored is delete";
}
else
{
	echo "error";
}
?>