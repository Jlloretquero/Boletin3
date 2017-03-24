<?php

$num1=1;
$asterisco="*";
$cantidad=1;

while ($num1<=6){
	while ($cantidad<=$num1){
		echo $asterisco;
		$cantidad++;
	}
	echo "<br>";
	$num1++;
	$cantidad=1;
}
?>