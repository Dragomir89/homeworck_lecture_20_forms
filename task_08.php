
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
		<form action="task_08Request.php" method="post">
			<div>
				<label for="username">username</label>
				<input type = "text" id='username' name = 'username'/>
	
			</div>
			<div>
				<label for="pass1">password</label>
				<input type = "password" id='pass1' name = 'pass1' value=''/>
			</div>
			<div>
				<label for="pass2">password confirm</label>
				<input type = "password" id='pass2' name = 'pass2' value=''/>
			</div>
			
			
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>

