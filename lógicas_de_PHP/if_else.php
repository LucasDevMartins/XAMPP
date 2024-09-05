<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php
			/*
			 OPERADORES DE COMPARAÇÃO:

			 == IGUAL
			 === IDENTICO
			 != OU <> DIFERENTE
			 !== NÃO IDENTICO
			 <  MENOR
			 > MAIOR
			 <= MENOR OU IGUAL
			 >= MAIOR OU IGUAL
			*/
			$idade = 32;

			if($idade >= 18) {	
				echo 'Você já pode tirar a sua CNH!';
			} else {
				echo 'Você ainda é menor de idade, e não é possível tirar a CNH!';
			}


		?>


	</body>
</html>