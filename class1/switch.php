<?php
	$a = 1;
	switch ($a){
		case 1:
			echo "1<br/>";
			break;
		case 2:
			echo "2<br/>";
			break;
	}
	$b = 1;
	switch ($b){
		case 1:
			$b++;
			break;
		case 2:
			$b++;
			break;
		default:
			$b++;
			break;
	}
	echo $b;
	echo "<br/>";
	$c = 1;
	switch ($c){
		case 1:
			$c++;
		case 2:
			$c++;
		default:
			$c++;
	}
	echo $c; 
?>