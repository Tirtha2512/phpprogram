<?php
Function area_rectangle($l,$w)
{
		echo "area of rectangle:";
		echo $area=$w*$l;
		

}
area_rectangle(45,18);
echo "<br>";
?>


<?php
Function vote($age)
{
	if($age>=18)
	{

		echo "you are eligible for vote";
	}
	else
	{

		echo "you are not eligible for vote";
	}
}
vote(12);
?>