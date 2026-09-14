<form action="" method="POST">
	name:<input type="text" name="name"><br>
	department:<input type="text" name="dept"><br>
	mobile no:<input type="number" name="mob"><br>
	date of birth:<input type="date" name="dob"><br>
	<input type="submit" name="submit">
</form>

<?php
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	die("connection is not done");
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];
}
$qry="insert into students(name,dept,mob,dob) values('$name','$dept',$mob,'$dob')";
if(mysqli_query($con,$qry))
{
	echo "insert succsfully";
}
?>