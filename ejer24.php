
<?php

$nota=rand(1,10);
echo "SE ESTA GENERANDO UNA NOTA ALEATORIA, REFRESCAR PARA CAMBIAR<br><br>";
echo "La nota es: ".$nota."<br>";

switch ($nota){
	case 1: echo "Suspenso";
	break;
	case 2: echo "Suspenso";
	break;
	case 3: echo "Suspenso";
	break;
	case 4: echo "Suspenso";
	break;
	case 5; echo "Aprobado";
	break;
	case 6; echo "Aprobado";
	break;
	case 7: echo "Bien";
	break;
	case 8: echo "Notable";
	break;
	case 9: echo "Sobresaliente";
	break;
	case 10: echo "Sobresaliente";
	break;
}