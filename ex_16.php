<?php
function check_types($types) {
	foreach ($types as $type => $tab) {
		foreach ($tab as $value) {
			if (gettype($value) != "$type") {
				return false;
			}
		}	
	}
	return true;
}
?>
