<?php
$num=[25,88,45,12,3];
print_r($num);
echo"<br>";


/*sort($num);
echo"sort function:";
echo"<br>";
print_r($num);*/


echo"<br>";
asort($num);
echo"asort function:";
print_r($num);


/*echo"<br>";
rsort($num);
echo"rsort function:";
print_r($num);*/


echo"<br>";
arsort($num);
echo"arsort function:";
print_r($num);



echo"<br>";
echo"current function:";
echo current($num);

echo"<br>";
echo"next function:";
echo next($num);

echo"<br>";
echo"previous function:";
echo prev($num);

echo"<br>";
echo"end function:";
echo end($num);


echo"<br>";
$info=["tirtha","gohel","jaydeepbhai"];
print_r($info);
echo"<br>";

echo"<br>";
echo"merge function:";
$b=array_merge($info,$num);
print_r($b);


echo"<br>";
echo"shift function:";
array_shift($info);
print_r($info);


echo"<br>";
echo"unshift function:";
array_unshift($info,"tirtha");
print_r($info);

echo"<br>";
echo"puch function:";
array_push($info,"jayshreeben");
print_r($info);

echo"<br>";
echo"pop function:";
array_pop($info);
print_r($info);



?>