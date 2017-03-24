<?php

echo "<h3>Los 20 primeros términos de la sucesión de Fibonacci</h3>";

$a=1;
$aa=1;
$i=3;
echo "$a, ";
echo "$aa";
while ($i<=20)
{
	$fibo=$a+$aa;
	echo ", $fibo";
	$a=$aa;
	$aa=$fibo;
	$i++;
}