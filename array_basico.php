<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Array em PHP</h3>
		
		<?php 
			//sequenciais (numéricos)
			//$lista_frutas = array('Banana', 'Uva', 'Morango', 'Mamão', 'Abacate');
			$lista_frutas = ['Banana', 'Uva', 'Morango', 'Mamão', 'Abacate'];

			//incluir dinamicamente
			$lista_frutas[] = 'Abacaxi';

			
			//recursos para teste
			// deixa o recurso formatado
			echo '<pre>';
			var_dump($lista_frutas);
			echo '<pre>';
			echo '<br />';
			print_r($lista_frutas);
			echo '<br />';

			//recupera individualmente o recurso do array
			echo $lista_frutas[2];
			echo '<br />';

			//associativos
			// Da mesma forma é possível declarar o array( ) ou []
			$lista_frutas = array(
				'a' => 'Banana',
				'b' => 'Uva',
				'c' => 'Morango',
				'd' => 'Mamão',
				'2' => 'Abacate');
			echo '<pre>';
			var_dump($lista_frutas);
			echo '<pre>';
			echo '<br />';
			echo $lista_frutas['2'];
			echo '<br />';
			$lista_frutas['z'] = 'Caqui';

			echo $lista_frutas['z'];
		?>



	</body>
</html>