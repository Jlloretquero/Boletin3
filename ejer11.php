<?php

$num1=rand(1,10);
$num2=0;

while ($num2<11){
	$multi=$num1*$num2;
	echo $num1." x ".$num2." = ".$multi."<br>";
	$num2++;
}

?>