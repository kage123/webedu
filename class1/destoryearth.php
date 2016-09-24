<?php
function destoryearth(){
	echo "毁灭地球";
}
destoryearth();
function destoryplanet($planet){
	echo "毁灭".$planet;
}
echo "<br/>";
$planet = "地球";
destoryplanet($planet);

?>