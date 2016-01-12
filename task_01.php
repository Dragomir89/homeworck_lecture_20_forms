<?php
require_once 'functions.php';

$n1 = getValue($_POST, 'number1');
$n2 = getValue($_POST, 'number2');
$operator = getValue($_POST,'operator');

$errors = [];


function validateFORM(&$errors) {
	global $n1, $n2, $operator;
	if (!validateRequred($n1)) {
		$errors['number1'][] = 'This field is reqired';
	}elseif (!isNumber($n1)) {
		$errors['number1'][] = 'Invalid input';
	}
	
	if (!validateRequred($n2)) {
		$errors['number2'][] = 'Invalid input';
	}elseif (!isNumber($n2)) {
		$errors['number2'][] = 'This field is reqired';
	}
}

$srt = 'qwerty';
echo crypt($str);





if ($_POST) {
	validateFORM($errors);
}


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>

label{
	width: 120px;
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
	<div>
		<form action="" method="post">
			<div class = "<?= addErrorClass($errors,'number1') ?>">
				<label for="number1">nuber1</label>
				<input type = "text" id='number1' name = 'number1'/>
				<?php showErrors('number1', $errors)?>
			
			</div>
			<div class = "<?= addErrorClass($errors,'operator') ?>">
				<label for="operator">operator</label>
				<select id="operator" name="operator">
					<option value = "sum">+</option>
					<option value = "subtraction">-</option>
					<option value = "partition">/</option>
					<option value = "multiplication">*</option>
				</select>
				
			</div>
			<div class = "<?= addErrorClass($errors,'number2') ?>">
				<label for="number2">nuber2</label>
				<input type = "text" id='number2' name = 'number2' />	
				
				<?php showErrors('number2', $errors)?>
			
			
			</div>
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>


