<?php
    $nbPassagers = array(35, 10, 22, 52, 15, 58, 8, 73);

    echo "Traversées rentables du 22/09/2022: ";
    
    for ($i = 0; $i < count($nbPassagers); $i++) {
		if ($nbPassagers[$i] >= 20) {
			echo $i + 1 , ' ';
		}
	}
	echo "\n";
?>
