<?php 
$counter = 1;

function count() {
	global $counter;
	return $counter++;
};

if (!empty($_POST)) {
	count();
};



?>
