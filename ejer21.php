<?php

$num1=rand(1,50);
$contador=$num1;

echo "<h3>NÚMERO ALEATORIO, ACTUALIZAR PARA CAMBIAR</h3><br>";
echo "El numero es ".$num1." y ";
echo "vamos a mostrar todos los divisores de este numero<br><br>";

for($contador=$num1;$contador>=0;$contador--){
	if ($num1%$contador==0)echo $contador."<br>";	
}

?>