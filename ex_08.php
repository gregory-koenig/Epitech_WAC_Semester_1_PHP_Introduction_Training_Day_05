<?php
function helix_post_finder() {
	if (isset($_POST["phelix"]) == true) {
		return $_POST["phelix"];
	} else {
		return NULL;
	}
}
?>
