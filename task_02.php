<?php 
require_once 'functions.php';


$username = getValue($_POST, 'username');
$pass1 	  = getValue($_POST, 'pass1');
$pass2    = getValue($_POST, 'pass2');

$errors = [];

function validateFORM(&$errors) {
	
	global $username,$pass1,$pass2;
	
	if (!validateRequred($username)) {
		$errors['username'][] = 'This field is requred';
	}elseif (!validateLenght($username, 2, 40)) {
		$errors['username'][] = 'username must be between 2-50 characters';
	}
	
	if (!validateRequred($pass1)) {
		$errors['pass1'][] = 'password is requred';
	}elseif (!validateLenght($pass1, 5, 40)) {
		$errors['pass1'][] = 'password must be between 5-40 characters';
	}elseif (!checkConfirmPasslord($pass1, $pass2)){
		$errors['pass2'][] = 'passwords are not equal';
	}
}



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
			<div class = "<?= addErrorClass($errors, 'username') ?>" >
				<label for="username">username</label>
				<input type = "text" id='username' name = 'username' value='<?= $username ?>'/>
				<?= showErrors('username', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, pass1)?>">
				<label for="pass1">password</label>
				<input type = "password" id='pass1' name = 'pass1' value=''/>
				<?= showErrors('pass1', $errors)?>
			</div>
			<div class = "<?= addErrorClass($errors, 'pass2') ?>">
				<label for="pass2">password confirm</label>
				<input type = "password" id='pass2' name = 'pass2' value=''/>
				<?= showErrors('pass2', $errors)?>
			</div>
			<?=criptPass($pass2, $errors); ?>
			
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>

