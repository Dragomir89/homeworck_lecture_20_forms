<?php
function getValue($arr, $key, $default = NULL) {
	return isset($arr[$key]) ? $arr[$key] : $default;
}
function validateRequred($value) {
	return !empty($value);
}
function isNumber($value) {

	if ((float)$value) {
		return true;
	}
	return false;
}
function validateLenght($value, $min, $max) {
	
	if (gettype($value) != 'string') {
	
		return false;
	}
	
	$len = mb_strlen($value,'UTF-8');
	if ($len < $min && $min) {
		return false;
	}
	if ($len > $max && $max) {
		return false;
	}
	
	return true;
}
function checkConfirmPasslord($pass1, $pass2) {
	return $pass1 === $pass2;
}
function criptPass($pass, $errors) {
	
	if (empty($_POST)) {
		return ;
	}
	
	return  empty($errors) ? 'Your crypt password is: '. crypt($pass, 'ss') : '';
}
function validateDay($day) {
	if (!isNumber($day)) {
		 return false;
	};
	
	if ($day < 1 || $day > 31) {
		return false;
	}
	return true;
}
function validateMonth($moth) {
	if (!isNumber($moth)) {
		return false;
	}
	if ($moth < 1 || $moth > 31) {
		return false;
	}
	return  true;
}
function validateYear($year) {
	if (!isNumber($year)) {
		return false;
	};
	
	if ($year < 1900 || $year > 2016) {
		return false;
	}
	return true;
}







function showErrors($fieldName, $errors) {
	
	if (!empty($errors[$fieldName])) {
		foreach ($errors[$fieldName] as $value) {
			echo "<p> $value </p>";
		}
	}
}
function addErrorClass($errors, $fieldName, $class = 'error'){

	
	if (!empty($errors[$fieldName])) {
		return $class;
	}
	return '';
}








