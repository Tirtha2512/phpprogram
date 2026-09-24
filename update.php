<?php
$con=mysqli_connect("localhost","root","","university");
if(!$con)
{
	die("connection is not done");
}
$id=$_GET['id'];
$qry="SELECT * FROM students WHERE id=$id";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_assoc($result);


<form method="POST">
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

	Name:<input type="text" name="id" value="<?php echo $row['name']; ?>">
	<br>
	<br>
	department:<input type="text" name="id" value="<?php echo $row['dept']; ?>">
	<br>
	<br>
	Mobile no:<input type="text" name="id" value="<?php echo $row['mob']; ?>">
	<br>
	<br>
	date of birth:<input type="text" name="id" value="<?php echo $row['dob']; ?>">
	<br>
	<br>
	<input type="submit" name="update" value="update record">

</form>


if(isset($_POST['update']))
{
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$mob=$_POST['mob'];
	$dob=$_POST['dob'];

	$qry="UPDATE students SET name='$name',dept='$dept',mob='$mob',dob='$dob' WHERE id=$id";

	if(mysqli_query($con,$qry))
{
	echo "update succsfully";
}
else
{
	echo "error updating";
}
}
?>