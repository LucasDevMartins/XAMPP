<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<?php 

			$idade = 32;
			$peso = 76;

			if($idade >= 16 && $idade <= 69 && $peso >= 50) {
				echo "Atende aos requisitos";
			} else {
				echo "Não atende aos requisitos";
			}
			
		?>


	</body>
</html>