<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Loop FOREACH</h3>
		
		<?php 
			
			$itens = ['sofa', 'mesa', 'cadeira', 'escrivaninha', 'estante'];

			echo '<pre>';
			print_r($itens);
			echo '</pre>';

			foreach ($itens as $item) {
				echo "$item";

				if ($item == 'mesa') {
					echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de quatro cadeiras!)';
				}

				echo '<br />';
			}
			
		?>

	</body>
</html>