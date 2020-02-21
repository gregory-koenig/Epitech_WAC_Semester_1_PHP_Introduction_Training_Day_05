<?php
function display_names(...$params) {
	$array = func_get_args();
	$array2 = array();
	$array2[0] = $_SERVER['argv'][0];
	$array[0] = substr($array2[0], strrpos($array[0], "/"));
	$array2[3] = count($array);
	if ($array2[3] % 2 == 0) {
		$array2[4] = 1;
	} else {
		$array2[4] = 0;
	}
	return $array2;
}
?>
