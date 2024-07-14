<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php 


			//gettype() => retornar o tipo da variável
			$valor = 15.35;
			//$valor2 = (float) $valor; //float, double
			//$valor2 = (string) $valor; 
			$valor2 = (int) $valor; //integer, int => tanto faz

			// booll ou boolean
			// 1 retorna verdeiro, não retorna nada significa false

			echo $valor . ' ' . gettype($valor);
			echo '<br />';
			echo $valor2 . ' ' . gettype($valor2);
		

		?>


	</body>
</html>