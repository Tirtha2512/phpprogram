<form action=""method="post">
	username<input type="text" name="name"><br>
	password<input type="text" name="pwd"><br>
	<input type="submit" name="submit">
</form>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$pwd=$_POST['pwd'];
		echo $name;

		echo $pwd;	
	}
		
?>