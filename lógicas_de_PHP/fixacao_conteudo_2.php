<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Atividade Fixação 2</h3>
		
		<?php 
			
			$numeros = array();

			while (count($numeros) <= 5) {

				$num = rand(1, 60);
				if (!in_array($num, $numeros)) {
					$numeros[] = $num;
				}
			}
			echo '<pre>';
			print_r($numeros);
			echo '<pre />';
		?>

	</body>
</html>