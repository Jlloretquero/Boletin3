<?php

echo "<h3>Muestra por pantalla todos los divisores de un numero random, actualizar para cambiar</h3>";

$num1=rand(1,50);
$contador=$num1;

echo "El numero es: ".$num1."<br><br>";

while ($contador>=0){
	if ($num1%$contador==0)echo $contador."<br>";
	$contador--;	
}