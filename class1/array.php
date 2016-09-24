<?php
	$b = array("a","2","3");
	echo $b["0"];
	$b[0]="c";
	echo $b["0"];
	$d="a";
	$d[0]="c";
	echo $d[0];
	$c = array(
		"y"  => "value",
		"key1" => "value1",

		);
	echo $c["y"];
	echo $c["key1"];
?>