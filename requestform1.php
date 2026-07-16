<form action=""method="POST">
	username<input type="text" name="name"><br>
	password<input type="text" name="pwd"><br>
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$pwd=$_REQUEST['pwd'];
		echo $name;

		echo $pwd;	
	}
		
?>