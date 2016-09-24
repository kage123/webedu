<?php
$a=1;
function cc($a){
	while($a<4){
		$a+=1;
		cc($a);
	}
	echo $a;
}
cc($a);
?>