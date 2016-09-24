<?php
interface mobile{
	public function run();
}

class plain	implements mobile{
	public function run(){
		echo "我是飞机";
	}
}
$airplane = new plain();
$airplane -> run();
?>