<?php 
require_once 'functions.php';
$char = getValue($_POST, 'char');



function generateWord(){
	$words = ['cat', 'dog', 'bird'];
	$len = count($words);
	$rndWord = $words[rand(1,$len) -1];
	

	
	return $rndWord;
}

$resultArr = [];

function dràwTask($word, $char,&$resultArr) {
	
	$len = mb_strlen($word);	
	
	
	
	for ($i = 0; $i < $len; $i++) {

		if ($word[$i] == $char) {
			array_push($resultArr, $char);
		}else {
			array_push($resultArr, '_');
		}		
	}
	$result = implode(" ",$resultArr);
	
	return "<p>$result</p>";
}

$word = 'dog'; //generateWord();






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
			
			<?=dràwTask($word, $char); ?>
			
			
			
			<div>
				<label for="char">Enter char</label>
				<input type = "text" id='char' name = 'char'/>
			</div>

			<div>
				<input type = "submit" />
			</div>
		</form>
	</div>
</body>
</html>