<?php

function fibonacci($n){
	$fibo = [];
	$fibo[0] = 0;
	$fibo[1] = 1;

	echo "$fibo[0], ";
	echo "$fibo[1], ";
	for ($i = 2; $i < $n; $i++) {
		$fibo[$i] = $fibo[$i - 1] + $fibo[$i - 2];
		echo "$fibo[$i], ";
	}
}

fibonacci(15);

?>

