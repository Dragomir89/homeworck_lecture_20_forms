


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
	<form action='task_05Request.php?a=b' method="post">
			<div>
				<label for="name">name</label>
				<input type = "text" id="name" name = "name"/>
			</div>
			<div>
				<label for="age">age</label>
				<input type = "number" id="age" name = "age"/>
			</div>
			<div>
				<label for="pass">password</label>
				<input type = "password" id="pass" name = "pass"/>
			</div>
			<div>
				<label for="passConfirm">passConfirm</label>
				<input type = "password" id="passConfirm" name = "passConfirm"/>
			</div>
			<div>
				<input type="hidden" name="color" value="yello">
				<label for="red">Red<input type="checkbox" name="color[]" id="red" value="red"/></label>
				<label for="green">Green<input type="checkbox" name="color[]" id="green" value="green"/></label>
				<label for="blue">Blue<input type="checkbox" name="color[]" id="blue" value="blue"/></label>
			</div>
			<div>
				<input type = "submit" />
			</div>
		</form>
</body>
</html>