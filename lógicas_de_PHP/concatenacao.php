<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php

			$nome = 'Lucas Martins';
			$cor = 'Preto';
			$idade = 32;
			$hobbie = 'jogar xadrez';


			//operador .
			echo 'Olá ' . $nome .', vi que sua cor preferida é ' . $cor . ' , estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $hobbie . ' .';


			// aspas duplas -> utilizar quando for concatenar variáveis, caso contrario utilizar as simples para ser um pouco mais rápida
			echo '<br />';

			echo "Olá $nome, vi que você tem $idade, você já esta pronto para ser desenvolvedor! Você gosta da cor $cor e gosta de $hobbie ."
		?>


	</body>
</html>