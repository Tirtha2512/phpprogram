<?php
//numeric array
$num=array("Atmiya","university","rajkot");
echo $num[0];
echo $num[1];
echo $num[2];
echo "<br>";
//associative array
$asso=array('name'=>"Tirtha",'city'=>"rajkot",1,2,3);
print_r($asso);
echo "<br>";
//simple array
$num=array(1,2,3,4);
echo $num[0];
echo $num[1];
echo $num[2];
echo $num[3]=8;
echo "<br>";
//multidimensional array
$multi=array(array(1,2,6),array("Atmiya","university","rajkot"));
#print_r($multi);
for($i=0;$i<count($multi);$i++)
{

	for($j=0;$j<=count($multi);$j++)
	{
		echo $multi[$i][$j];
	}

}
echo "<br>";
echo $multi[0][0];
echo $multi[0][1];
echo $multi[0][2];
echo "<br>";
echo $multi[1][0];
echo $multi[1][1];
echo $multi[1][2];
?>