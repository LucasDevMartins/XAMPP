<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções</h3>
		
		<?php 


			//void (sem retorno)
			function exibirBoasVindas() {

				echo "Bem-vindo ao curso de PHP! <br />";

			}

			exibirBoasVindas();


			//return (com retorno)
			function calcularAreaTerreno($largura, $comprimento) {

				$area = $largura * $comprimento;

				return $area;

			}

			echo calcularAreaTerreno(30, 50);
			echo '<br />';
			echo calcularAreaTerreno(3, 5);
			echo '<br />';
			echo calcularAreaTerreno(10, 2);
			echo '<br />';
			echo calcularAreaTerreno(30, 50);





		?>



	</body>
</html>