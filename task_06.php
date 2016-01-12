<?php 
require_once 'functions.php';

$firstName = getValue($_POST, 'firstName');
$lastName  = getValue($_POST, 'lastName');
$day  	   = getValue($_POST, 'day');
$month     = getValue($_POST, 'month');
$year	   = getValue($_POST, 'year');


$errors = [];

function validateForm(&$errors) {
	global $firstName, $lastName, $day, $month, $year;
	
	if (!validateRequred($firstName)) {
		$errors['firstNname'][] = 'firs name is reqired';
	}elseif (!validateLenght($firstName, 2, 40)) {
		$errors['firstNname'][] = 'firs name must be between 2-40 characters';
	}
	
	
	if (!validateRequred($lastName)) {
		
		$errors['firstNname'][] = 'last name is reqired';
	}elseif (!validateLenght($lastName, 2, 40)) {
		$errors['lastName'][] = 'last name must be between 2-40 characters';
	}
	
	
	if (!validateDay($day)) {
		$errors['day'][] = 'invalida day';
	}
	if (!validateMonth($month)) {
		$errors['month'][] = 'invalida month';
	}
	if (!validateYear($year)) {
		$errors['year'][] = 'invalida year';
	}
}

if (!empty($_POST)) {
	validateForm($errors);
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
			<div class = "<?= addErrorClass($errors, 'firstName') ?>" >
				<label for="firstName">First Name</label>
				<input type = "text" id='firstName' name = 'firstName' value='<?= $firstName ?>'/>
				<?= showErrors('firstName', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, pass1)?>">
				<label for="lastName">LastName</label>
				<input type = "text" id='lastName' name = 'lastName' value='<?= $lastName ?>'/>
				<?= showErrors('lastName', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, 'day') ?>">
				<label for="day">Day</label>
				<input type = "number" id='day' name = 'day' value='<?=$day ?>'/>
				<?= showErrors('day', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, 'month') ?>">
				<label for="month">Month</label>
				<input type = "number" id='month' name = 'month' value='<?= $month ?>'/>
				<?= showErrors('month', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, 'year') ?>">
				<label for="year">Year</label>
				<input type = "number" id='year' name = 'year' value='<?= $year ?>'/>
				<?= showErrors('year', $errors)?>
			</div>
			
			
			
			
			
			
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>
