<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php

			// É obrigatório iniciar com o caractere "$"
			# String
			$nome = 'Lucas Martins';

			//int
			$idade = 29;

			//float
			$peso = 80.5;

			//booleana
			$fumante_sn = true; // true ou (false = vazio)

			//... lógica ...//
			$idade = '30';

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>



	</body>
</html>