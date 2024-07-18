<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Null, False e Empty</h3>
		
		<?php 
		
			//false (true/false) - tipo de variável boolean
			//null e empty - valores especiais

			$funcionario1 = null;
			$funcionario2 = '';
			$funcionario3 = false;
			//valores null
			if (is_null($funcionario1)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			}

			echo '<br />';
			if (is_null($funcionario2)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			} echo '<br />';


			if (is_null($funcionario3)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			} echo '<hr />';

			// valores vazios?
			echo '<br />';
			if (empty($funcionario1)) {
				echo 'Sim, a variável esta vazia';
			} else {
				echo 'Não, a variável não esta vazia';
			} echo '<br/>';

			if (empty($funcionario2)) {
				echo 'Sim, a variável esta vazia';
			} else {
				echo 'Não, a variável não esta vazia';
			} echo '<br/>';

			if (empty($funcionario3)) {
				echo 'Sim, a variável é null';
			} else {
				echo 'Não, a variável não é null';
			}



		?>



	</body>
</html>