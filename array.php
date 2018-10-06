<?php
$arrayName = array("deloara", "shahid ullah", "wahid ullah", "thohis ulla", "Anamol haque");
$length = count($arrayName);
//echo $length;
for($i=0; $i<=$length; $i++){
	$nameArray = $arrayName[$i];
	echo "$nameArray"."<br>";
}


?>