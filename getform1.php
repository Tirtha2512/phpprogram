<form action=""method="GET">
	username<input type="text" name="name"><br>
	password<input type="text" name="pwd"><br>
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_GET['submit']))
	{
		$name=$_GET['name'];
		$pwd=$_GET['pwd'];
		echo $name;

		echo $pwd;	
	}
		
?>