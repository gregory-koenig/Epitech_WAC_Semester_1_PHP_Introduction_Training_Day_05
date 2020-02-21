<?php
function my_get_weird_info() {
	if (!isset($_GET['nbr_elem'])) {
		return NULL;
	}
	$i = 0;
	$count = $_GET['nbr_elem'];
	foreach ($_GET as $key => $value) {
		if ($count <= $i) {
			return 0;
		}
		$i++;
		if (is_int($value)) {
			echo '$_GET["' . $key . '"] = ' . $value . "\n";
		} else if (gettype($value) == "string") {
			echo '$_GET["' . $key . '"] = ' . '"' . $value . '"' .  "\n";
		}
	}
	return 0;
}
?>
