<?php
    $nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

    $passagersRecherches = 52;
    for ($i = 0, $nbTraversees = count($nbPassagers); $i < $nbTraversees; $i++) {
		if ($nbPassagers[$i] === $passagersRecherches) {
			echo "La traversée " , ($i + 1) , " a transporté $passagersRecherches passagers.\n";
		}
	}
?>
