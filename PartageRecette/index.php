<?php

$alea = array( rand(0,100),
			   rand(0,100),
			   rand(0,100) 
		);

$data['alea'] = $alea;
foreach($data as $value)
	foreach($value as $mabite)
		echo $mabite; 

?>