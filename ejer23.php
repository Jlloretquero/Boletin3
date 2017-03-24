<?php

echo "LOS 20 PRIMEROS NUMEROS DE FIBONACCI<br>";
$a=1;
$aa=1;
echo "$a, ";
echo "$aa";
for ($i=3; $i<=20; $i++) 
{
	$fibo=$a+$aa;
	echo ", $fibo";
	$a=$aa;
	$aa=$fibo;
}

?>