<?php
$adult = 0;
$under = 0;
for($i = 1; $i < 16; $i++){
	if($_POST[$i."_person"] >= 18){
		$adult++;
	}else{
		$under++;
	}
}
echo $adult." pessoas são maiores de 18 anos.<br/><br/>";
echo $under." pessoas são menores de 18 anos.";


?>