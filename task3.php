<?php

$n=15;
$fibo = [];
$fibo[0] = 0;
$fibo[1] = 1;

echo "$fibo[0], ";
echo "$fibo[1], ";
for ($i = 2; $i < $n; $i++) {
	$fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
	if ($fibo[$i] > 100) {
		break;
	}
	echo "$fibo[$i], ";
}



?>

