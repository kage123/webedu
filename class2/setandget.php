<?php
class classname{	
	private $name;
	public function __set($name,$value){
		$this -> $name = $value;		
	}	
	public function __get($name){
		return $this -> name;		
	}
	public function setname($value){
		$this -> name = $value;		
	}	
	public function getname(){
		return $this -> name;		
	}
}
$a = new classname();
$a -> __set("name","xiaoming");
echo $a -> __get("name");
echo "<br/>"
$b = new classname();
$b -> setname("xiaohong");
echo $b -> getname();
?>