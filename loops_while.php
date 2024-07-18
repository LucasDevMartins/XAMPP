<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções Array</h3>
		
		<?php 

			$num = 1;
			//operadores comparação / lógicos
			echo '-- Início do loop -- <br />';
			while ($num < 10) {
				//echo "$num <br />";

				 $num += 1; //critério de parada

				 if ($num == 2 || $num == 6) {
				 	continue;
				 }

				 echo "$num <br />";

				 /*
				 if ($num > 100) {
				 	break;
				}
				*/
 
			}

			echo '-- Fim do Loop -- ';

		?>







	</body>
</html>