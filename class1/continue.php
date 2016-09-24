<?php
	for($i=100;$i<=200;++$i){
		if ($i%3 ==0){
			continue;
		}
		echo $i;
		echo "<br/>";
	}
	$a=10;
	$b =++$a;
	echo "<br/>";
	echo $a;
	echo "<br/>";
	echo $b;
?>