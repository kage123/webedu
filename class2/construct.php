<?php

class classname{	
	public function __construct($param){
		echo "hello ".$param."<br/>";
	}
	public function __destruct(){
		echo "goodbye";
	}
	public function run(){
		echo "run<br/>";
	}
}
$classname = new classname("xiaoming");
$classname -> run();
?>