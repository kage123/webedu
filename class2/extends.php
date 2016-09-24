<?php
class B extends A {
	public $attribute2;
	public function operation2(){
		echo "operation2<br/>";
	}
}
class A {
	public $attribute1;
	public function operation1(){
		echo "operation1<br/>";
	}
}
$b = new B();
$b -> operation1();
$b -> attribute1 = 10;
$b -> operation2();
$b -> attribute2 = 10;
?>