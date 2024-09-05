<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Array Pesquisas</h3>
		
		<?php 
		
			//in_rray() -> true ou false para a existência do que está sendo procurado
			//array_search() -> retorna o índice do valor pesquisado, caso ele exista

			$lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

			echo '<pre>';
			print_r($lista_frutas);
			echo '</pre>';

			$existe = in_array('Abacate', $lista_frutas);
			//true -> texto = 1
			//false -> texto = vazio
			if($existe) {
				echo 'Sim, o valor pesquisado existe no array';
			} else {
				echo 'Não, o valor pesquisado não existe no array';
			}

			echo '<hr />';
			// quando não encontra um valor, o retorno seria null -> texto = vazio
			$existe1 = array_search('Abacate', $lista_frutas);

			if($existe1 != null) {
				echo 'Sim, o valor pesquisado existe no array';
			} else {
				echo 'Não, o valor pesquisado não existe no array';
			}

			$lista_coisas = [
				'frutas' => $lista_frutas,
				'pessoas' => ['Kelly', 'Lucas', 'Jerusa']
			];

			echo '<pre>';
			print_r($lista_coisas);
			echo '</pre>';

			$existe2 = in_array('Uva', $lista_coisas['frutas']);

			if($existe2) {
				echo 'Sim, o valor pesquisado existe no array';
			} else {
				echo 'Não, o valor pesquisado não existe no array';
			}

		?>



	</body>
</html>