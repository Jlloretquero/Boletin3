<?php

echo "<h3>TABLA MULTIPLICAR, ACTUALIZAR PARA CAMBIAR NUMERO</h3>";

$num1=rand(1,10);

for ($num2=0;$num2<11;$num2++){
	$resul=$num1*$num2;
	echo $num1." x ".$num2." = ".$resul."<br>";
}
