<?php
	function say_hello(){
		$name = "jack";
		echo "hello,".$name;
	}
	$m=100;
	function fun1(){
		$m +=100;
	}
	$n=100;
	function fun2(&$n){
		$n +=100;
	}
	function A($m){
		$n = 2*$m;
		return $n;
	}
	echo "调用函数前:$m";
	fun1($m);
	echo "<br/>";
	echo "调用函数后:$m";
	echo "<br/>";
	echo "调用函数前:$n";
	fun2($n);
	echo "<br/>";
	echo "调用函数后:$n";
	echo "<br/>";
	$abc = 10;
	$d = A($abc);
	echo $d;

?>