<?php
class classname{	
	public $attribute;
	public function operation($param){
		$this -> attribute = $param;
		echo $this -> attribute;
	}
}
$a = new classname();
$a -> attribute = "123";
$a -> operation("123");
?>