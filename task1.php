<?php

function allEvenNumsForLoop(int $start,int $end,int $step){
	for($i=$start;$i<=$end;$i+=$step){
		echo "$i, ";
	}
	
}

allEvenNums(2,20,2);

function allEvenNumsWhileLoop($start,$end,$step){
	$i=$start;
	while($i<=$end){
		echo "$i, ";
		$i+=$step;
	}
}

allEvenNumsWhileLoop(2,20,2);

function allEvenNumsDoWhileLoop($start,$end,$step){
	$i = $start;
	do{
		echo "$i, ";
		$i += $step;
	}while($i<=$end);

}

allEvenNumsDoWhileLoop(2,20,2);



?>

	




