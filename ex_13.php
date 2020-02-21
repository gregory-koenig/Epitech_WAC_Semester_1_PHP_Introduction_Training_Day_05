<?php
function my_sort_files(&$tab) {
	asort($tab);
	foreach ($tab as $value) {
		echo "$value\n";
	}
}
?>
