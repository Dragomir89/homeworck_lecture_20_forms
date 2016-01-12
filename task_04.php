<?php
$arr = [];
function getAllValues($postRequest) {

	global $arr;

	foreach ($postRequest as $value) {
		if (!(preg_match("/^[0-9]+$/", $value))) {
			continue;
		}
		array_push($arr, $value);
	}

	sort($arr);
	return $arr;
}


$results = getAllValues($_POST);

function showMin($results) {
	
	if (empty($results)) {
		return '';
	}
	
	return $results[0] ? "<p>Min value is:  $results[0] </p>" : '';
	
}

function showMax($results){
	
	
	if (empty($results)) {
		return '';
	}
	
	$len = count($results);
	
	$max = $results[$len - 1];
	
	return $max ? "<p>Max value is:  $max </p>" : '';
	
}

function showAll($results) {
	
	if (empty($results)) {
		return '';
	}
	
	$allNumbs = '';
	
	foreach ($results as $value) {
		$allNumbs .= "$value ";
	}
	
	return "<p> $allNumbs </p>";
}
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>


<style>

label{
	width: 90px;
	display: inline-block;
}
div{
	margin: 5px; 
}
.error{
	color: red;
}


.error input, .error select, .error textarea{
	border: 2px solid red;
}
</style>
</head>
<body>
	<form action="" method="post">
			<div>
				<label for="numb1">value</label>
				<input type = "text" id="numb1" name = "numb1"/>
			</div>
			<div>
				<label for="numb2">value</label>
				<input type = "text" id="numb2" name = "numb2"/>
			</div>
			<div>
				<label for="numb3">value</label>
				<input type = "text" id="numb3" name = "numb3"/>
			</div>
			<div>
				<label for="numb4">value</label>
				<input type = "text" id="numb4" name = "numb4"/>
			</div>
			<div>
				<label for="numb5">value</label>
				<input type = "text" id="numb5" name = "numb5"/>
			</div>
			<div>
				<label for="numb6">value</label>
				<input type = "text" id="numb6" name = "numb6"/>
			</div>
			<div>
				<label for="numb7">value</label>
				<input type = "text" id="numb7" name = "numb7"/>
			</div>
			<div>
				<label for="numb8">value</label>
				<input type = "text" id="numb8" name = "numb8"/>
			</div>
			<div>
				<label for="numb9">value</label>
				<input type = "text" id="numb9" name = "numb9"/>
			</div>
			<div>
				<label for="numb10">value</label>
				<input type = "text" id="numb10" name = "numb10"/>
			</div>
			<?= showAll($results) ?>
			<?= showMin($results) ?>
			<?= showMax($results) ?>
			
			<div>
				<input type = "submit" />
			</div>
		</form>
</body>
</html>


