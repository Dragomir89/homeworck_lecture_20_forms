<?php 
	var_dump($_POST);
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<div>
	
		<form action="" method="post">
			<div>
				<label>Select Color</label>
				<select name="color[]" id="" multiple="multiple">
					<option value="255000000">Red</option>
					<option value="000255000">Green</option>
					<option value="000000255">Blue</option>
				</select>
			</div>
			<div>
				<input type="submit" />
			</div>
		</form>
	
	</div>
</body>
