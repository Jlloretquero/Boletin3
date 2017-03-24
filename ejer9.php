<?php

$num1=rand(-50,50);
$num2=rand(-50,50);

echo $num1." y ".$num2."<br>";
if ($num1>0 && $num2<$num1)echo "Alejandro";
else if($num1>0 && $num2>=$num1)echo "Just Berto";
else echo "Alejandro Just Berto";

?>