<?php

$num1=rand(1,50);
$num2=rand(1,50);

$suma=$num1+$num2;
$multi=$num1*$num2;

echo $num1." y ".$num2."<br>";
if ($suma>$multi)echo "La suma es mayor que el producto";
else echo "El producto es mayor que la suma";

