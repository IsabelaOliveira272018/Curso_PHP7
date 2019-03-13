<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Aulas PHP</title>
	
</head>
<body>
<div>

	<?php

	$atual = $_GET["aa"];
	echo "O ano atual é: $atual e o ano anterior é:" .--$atual;

	?>


</div>
</body>
</html>