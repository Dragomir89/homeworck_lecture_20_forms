

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
		<form action="task_09Request.php?firstName=Dragomir&lastName=Mildov&age=25&username=drasho&pass1=qwerty&pass2=qwerty" method="post">
			<div>
				<label for="firstName">firstName</label>
				<input type = "text" id='firstName' name = 'firstName' value = 'Dragomir'/>
	
			</div>
			<div>
				<label for="lastName">lastName</label>
				<input type = "text" id='lastName' name = 'lastName' value = 'Mildov'/>
	
			</div>
			<div>
				<label for="age">age</label>
				<input type = "number" id='age' name = 'age' value = '25'/>
	
			</div>
			
			<div>
				<label for="username">username</label>
				<input type = "text" id='username' name = 'username' value = 'drasho'/>
	
			</div>
			<div>
				<label for="pass1">password</label>
				<input type = "password" id='pass1' name = 'pass1' value='qwerty'/>
			</div>
			<div>
				<label for="pass2">password confirm</label>
				<input type = "password" id='pass2' name = 'pass2' value='qwerty'/>
			</div>
			
			
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>