<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Aulas PHP</title>
	
</head>
<body>
<div>

	<?php 

	$preco = $_GET["p"];
	echo "O preco do produto é: R$ $preco" .number_format($preco, 2);
	$preco += ($preco*10/100); //com operadores de atribuicao pra simplificar
	echo "<br/> O novo preco com 10% de aumento sera: R$ $preco" .number_format($preco, 2);

	?>




</div>
</body>
</html>