<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Array Multidimensional em PHP</h3>
		
		<?php 
		
			$lista_coisas = [];

			$lista_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
			$lista_coisas['pessoas'] = [1 => 'Kelly', 2 => 'Lucas', 3 => 'Jerusa'];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';

			echo '<hr />';
			echo $lista_coisas['frutas'][3];
			echo '<hr />';
			echo $lista_coisas['pessoas'][2];


		?>



	</body>
</html>