<?php
function post_levenshtein_score() {
	if (isset($_POST["str_one"]) && isset($_POST["str_two"])) {
		$lev = levenshtein($_POST["str_one"], $_POST["str_two"]);
		return $lev;
	} else {
		return NULL;
	}
	if ($lev < 0) {
		return NULL;
	}
}
?>
