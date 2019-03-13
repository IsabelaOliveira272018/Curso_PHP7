<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Aulas PHP</title>
	
</head>
<body>
<div>
	<h2>

	<?php 

	$n1 = $_GET["a"];
	$n2 = $_GET["b"];

	echo "Valores recebidos: $n1 e $n2 <br/>";

	$m = ($n1 + $n2) / 2;

	echo "A soma é: ". ($n1+$n2);
	echo "<br/>A subtracao é: ". ($n1-$n2);
	echo "<br/>A multiplicao é: ". ($n1*$n2);
	echo "<br/>A divisao é: ". ($n1/$n2);
	echo "<br/>O modulo é: ". ($n1%$n2);
	echo "<br/>A media é: $m";

	?>
	</h2>
</div>
</body>
</html>