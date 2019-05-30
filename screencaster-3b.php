<?php 
function me($test,$del){
	$one= explode("|", $test);
	$names=preg_replace("/[^a-zA-Z]/", "", $one[0]);
	$hon=preg_replace("/[Engineer]/","(Er.",$names );
	$one[1]=preg_replace("/.[00],/", "", $test);

	$return="$names"."$one[1]"."";
	echo $return;
	echo me ("Engineer-Wairuri-Kamau|20.00,15,6","|");
}
 ?>
 /
101198
100504