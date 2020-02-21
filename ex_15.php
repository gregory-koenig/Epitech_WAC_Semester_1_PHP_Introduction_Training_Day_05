<?php
function convert_number($nbr) {
	$ascii = chr($nbr);
	if ($nbr > 1000) {
		echo "Vive les Pangolins\n";
	} else {
		echo $ascii . "\n";
	}
}
?>
