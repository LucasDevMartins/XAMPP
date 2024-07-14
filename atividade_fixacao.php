<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Atividade de Fixação</h3>
		
		<?php 

			/*
			COMO EU FIZ:

			function calcularImpostoDeRenda($salario) {
				if($salario <= 1903.98) {
					echo "Isento de declaração de imposto de Renda";
				} elseif ($salario >= 1903.99 && $salario <= 2826.65) {
					echo "7,5%";
				} elseif ($salario >= 2826.66 && $salario <= 3751.05) {
					echo "15%";
				} elseif ($salario >= 3751.06 && $salario <= 4664.68) {
					echo "22,5%";
				} else {
					echo "27,5%";
				}
			}

			echo calcularImpostoDeRenda(10000);

			*/

			// COM O GABARITO:
			
			function calcularIRPF($salario) {
				$imposto = 0;

				if($salario <= 1903.98) {
					$imposto = 0;
				} elseif ($salario >= 1903.99 && $salario <= 2826.65) {
					$imposto = ($salario * 7.5) / 100;
				} elseif ($salario >= 2826.66 && $salario <= 3751.05) {
					$imposto = ($salario * 15) / 100;
				} elseif ($salario >= 3751.06 && $salario <= 4664.08) {
					$imposto = ($salario * 22.5) / 100;
				} else {
					$imposto = ($salario * 27.5) / 100;
				}
				return $imposto;
			}

			//chama/imprime o retorno da função passando o salário por parâmetro
			echo calcularIRPF(2500);

		?>



	</body>
</html>