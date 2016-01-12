<?php
require_once 'functions.php';

$numb = getValue($_POST, 'numb');
$demention = getValue($_POST, 'demention');
$result;

if ($demention == 'F' && $numb != '') {
	 $result = $numb * (9/5) + 32;
	 echo $result . ' F';
}else if ($demention == 'C' && $numb != ''){
	echo $numb . ' C';
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
			<div>
				<label for="numb">value</label>
				<input type = "number" id="numb" name = "numb"/>
			</div>
			<div>
			<input type="hidden" name="demention" value="C">
				<label for="celsius">C<input type="radio" name="demention" id="celsius" value="C"/></label>
				<label for="fahrenheit">F<input type="radio" name="demention" id="fahrenheit" value="F"/></label>
			</div>
			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>
