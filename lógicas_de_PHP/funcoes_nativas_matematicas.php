<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções Nativas Matemáticas</h3>
		
		<?php 

			$num = 7.3;
			echo "O número original é $num <br /> <hr />";

			//Arredonda o valor para cima
			echo ceil($num) . '<br />' . '<hr />';
			//Arredonda o valor para baixo
			echo floor($num) . '<br />' . '<hr />';
			//Arredonda o valor com base nas casas decimais .0 e .4 => baixo / .5 => para cima
			echo round($num) . '<br />' . '<hr />';
			//Gera um inteiro aleatório 0 até randmax
			echo rand(10, 20) . '<br />' . '<hr />';
			echo getrandmax() . '<br />' . '<hr />';
			//Retorna a raiz quadrada
			echo sqrt($num);
		?>



	</body>
</html>