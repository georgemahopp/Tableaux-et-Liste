<?php
    $nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);


    $traversesNonRentables = 0;
    for ($i = 0, $nbTraversees = count($nbPassagers); $i < $nbTraversees; $i++) {
		if ($nbPassagers[$i] < 20) {
			$traversesNonRentables = $traversesNonRentables + 1 ;
		}
	}
	echo $traversesNonRentables . " traversées non rentables le 22/09/2022.\n";
?>
