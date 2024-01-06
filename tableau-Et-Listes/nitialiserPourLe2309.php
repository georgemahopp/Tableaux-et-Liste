<?php
    $nbPassagers = array();

    for ($i = 1; $i <= 10; $i++) {
		$nbPassagers[ ] = 0;
	}
    for ($i = 0, $nbTraversees = count($nbPassagers); $i < $nbTraversees; $i++) {
		echo "Traversée " , ($i + 1) . ": " , $nbPassagers[$i] , " passager\n";
	}
?>
