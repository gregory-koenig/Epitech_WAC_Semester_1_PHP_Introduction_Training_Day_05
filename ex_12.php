<?php
function get_execution_time() {
	$server_time_start = $_SERVER["REQUEST_TIME_FLOAT"];
	$server_time_end = microtime(true);
	$server_time = $server_time_end - $server_time_start;
	return round($server_time, $precision = 7);
}
?>
