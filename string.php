<?php
echo chr(99);
echo "<br>";


echo ord("t");
echo "<br>";

echo strtoupper("tirtha");
echo "<br>";

echo strtolower("TIRTHA");
echo "<br>";

echo md5("tirtha");
echo "<br>";

$a=explode("t","this is testy food today");
print_r($a);
echo "<br>";

/*$b=implode("t","this is testy food today");
print_r($b);
echo "<br>";*/


echo strlen("this is my first program");
echo "<br>";



$a=trim(" this ");
echo $a;
echo "<br>";
$b=strlen($a);
echo $b;
echo "<br>";


$c=substr("Tirtha",2);
echo $c;
echo "<br>";

 echo substr_count("tirtha","t");
 echo "<br>";


 echo substr_compare("i like", "  like", 3);
 echo "<br>";

echo strcmp("gohel", "go");
 echo "<br>";


echo strstr(" i am tirtha","a");
echo "<br>";

echo strrev("i love php");
echo "<br>";

echo str_replace("love", "love", "like");
echo "<br>";
?>