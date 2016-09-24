<?php
class B extends A {
	public function operation(){
		echo "operation2<br/>";
	}
}
class A {
	public function operation(){
		echo "operation1<br/>";
	}
}
$b = new B();
$b -> operation();
$a = new A();
$a -> operation();
?>