<?php
$request = array_merge($_GET, $_POST);


foreach ($request as $key => $value) {
	
	echo   $key .' -> ' . gettype($value) . '<br>';
	
}
?>


