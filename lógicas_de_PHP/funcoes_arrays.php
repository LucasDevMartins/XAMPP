<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções Array</h3>
		
		<?php 
		
		//is_array(array) - > Verifica se o parâmetro é um array
		$array = [];
		$retorno = is_array($array);

		if($retorno) {
			echo 'Sim, é um array';
		} else {
			echo 'Não, não é um array';
		}
		echo '<hr>';

		//array_keys(array) -> Retorna todas as chaves de um array
		$array1 = [1 => 'a', 7 => 'b', 18 => 'c'];
		echo '<pre>';
			print_r($array1);
		echo '</pre>';

		$chaves_array = array_keys($array1);
		echo '<pre>';
			print_r($chaves_array);
		echo '</pre>';
		echo '<hr>';

		//sort(array) -> Ordena um array e reajusta seus índices
		$array2 = ['notebook', 'teclado', 'mouse', 'cabo HDMI', 'fonte atx', 'monitor'];
		echo '<pre>';
			print_r($array2);
		echo '</pre>';

		sort($array2); //true ou false para tentativa de ordenação
		echo '<pre>';
			print_r($array2);
		echo '</pre>';
		echo '<hr>';
		//asort(array) -> Ordena um array preservando os índices
		$array3 = ['notebook', 'teclado', 'mouse', 'cabo HDMI', 'fonte atx', 'monitor'];
		echo '<pre>';
			print_r($array3);
		echo '</pre>';

		asort($array3); //true ou false para tentativa de ordenação
		echo '<pre>';
			print_r($array3);
		echo '</pre>';
		echo '<hr>';

		//count(array) -> Conta a quantidade de elementos de um array
		$array4 = ['notebook', 'teclado', 'mouse', 'cabo HDMI', 'fonte atx', 'monitor'];
		echo '<pre>';
			print_r($array4);
			echo count($array4);
		echo '</pre>';
		echo '<hr>';

		//array_merge(array) -> Funde um ou mais arrays
		$array5 = [1, 2, 3];
		$array6 = array('linux');

		$novo_array = array_merge($array5, $array6, $array1, $array2, $array3);
		echo '<pre>';
			print_r($novo_array);
		echo '</pre>';
		echo '<hr>';

		//explode(array) -> Divide uma string baseada em um delimitador
		$string = '18/07/2024';
		$array_retorno = explode('/',$string);
		echo $string . '<br />';
		echo '<pre>';
			print_r($array_retorno);
		echo '</pre> <br />';
		echo $array_retorno[2]. '-' . $array_retorno[1] . '-' . $array_retorno[0];
		echo '<hr>';

		//implode(array) -> Junta elementos de um array em uma string
		
		$string_retorno = implode(', ', $array4);
		echo $string_retorno;	

		?>







	</body>
</html>