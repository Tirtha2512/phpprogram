<table border="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>dept</th>
		<th>mob</th>
		<th>dob</th>
		<th>delete</th>
		<th>update</th>
	</tr>
</table>
<?php
inclued("connection.php");
$qry="select * from students";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>0)
{
	
}

?>