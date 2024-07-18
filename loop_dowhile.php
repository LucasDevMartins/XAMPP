<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Loops</h3>
		
		<?php 

			$x = 1;

			do {
				echo "X = $x <br />";

				$x++; //critério de parada
				//continue
				//break
			} while ($x < 9);
			echo '<hr>';

			while($x < 11) {
				echo "'Entrou no while'";
				break;
			}
		?>







	</body>
</html>