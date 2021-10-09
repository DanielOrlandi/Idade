<?php

function age(){
	for($i = 1; $i < 16; $i++){
		echo '<label>Pessoa </label>';
		echo $i;
		echo '<input type="text" name="';
		echo $i.'_person" size="10" maxlength="30"/><br/><br/>';
	}
}

?>


<html>
	<head>
		<title>Questão1</title>
	</head>
	<body>
		<form name="f_ques" method="post" action="idade.php">
			<label>Coloque a idade de cada pessoa.</label><br/><br/>
			<?php
				age();
			?>
			<input type="submit" value="Enviar"/>
		</form>
	</body>
</html>