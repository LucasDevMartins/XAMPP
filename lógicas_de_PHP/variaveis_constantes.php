<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php
			//quando constante utilizar letras maiusculas
			//variaveis constantes é necessário declarar um função define()
			define('BD_URL', 'endereco_bd_dev');
			define('BD_USUARIO', 'usuario_dev');
			define('BD_SENHA', 'senha_dev');

			//.. lógica ..//


			echo BD_URL . '<br />';
			echo BD_USUARIO . '<br />';
			echo BD_SENHA . '<br />';


		?>


	</body>
</html>