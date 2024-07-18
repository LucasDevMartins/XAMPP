<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Loop FOREACH</h3>
		
		<?php 
			
			$funcionarios = array(
				array('nome' => 'Lucas', 'salario' => 2000, 'data_nascimento' => "29/09/1991"),
				array('nome' => 'Kelly', 'salario' => 2500),
				array('nome' => 'Josmar', 'salario' => 5000)
			); 

			echo '<pre>';
			print_r($funcionarios);
			echo '</pre>';
			echo '<hr>'; 
			
			foreach ($funcionarios as $idx => $funcionario) {
				
				foreach ($funcionario as $idx2 => $valor) {
					echo "$idx2 - $valor <br />";
				}
				echo '<hr>'; 
			}

		?>

	</body>
</html>