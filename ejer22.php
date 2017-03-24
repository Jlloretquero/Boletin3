<?php 
$num1 = 1;
$num2 = 50; 
echo "Los numero primos que hay del ".$num1." al ".$num2."<br>"; 
for ($i = $num1; $i <= $num2; $i++) { 
	$nDiv = 0;  
	for ($n = 1; $n <= $i; $n++){ 
		if($i%$n == 0) 
		{ 
		$nDiv = $nDiv + 1;
		} 
	} 
	if($nDiv == 2 or $i == 1) 
	{ 
	print '<br>'; 
	print $i; 
	} 
}