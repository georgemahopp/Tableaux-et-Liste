<?php
    $nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

    for ($i = 0, $nbTraversees = count($nbPassagers); $i < $nbTraversees; $i++) {
		$nbPassagers[$i] = ceil($nbPassagers[$i] / 10) * 10;
		echo $nbPassagers[$i] . " passagers\n";
	}
?>
