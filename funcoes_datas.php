<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções de Manipulação de Datas</h3>
		
		<?php 

			/*
			//recuperação da data atual / data recorrente
			echo date('d/m/Y H:i');

			//
			echo '<br />';
			echo date_default_timezone_get();
			echo date_default_timezone_set('America/Sao_Paulo');
			echo '<br />';
			echo date('d/m/Y H:i');
			echo '<br />';
			echo date_default_timezone_get()
			*/

			//para calculos sempre utilizar o padrão americano
			$data_inicial = '2024-07-16';
			$data_final = '2018-04-24';

			//timestamp
			//01/01/1970 - data marcada do inicio da era UNIX
			//(js ->milissegundos / php->segundos)
			//abs -> retorna o valor absoluto de um número
			$time_inicial = strtotime($data_inicial);
			$time_final = strtotime($data_final);

			echo $data_inicial . ' - ' . $time_inicial;
			echo '<br />';
			echo $data_final . ' - ' . $time_final;
			echo '<br />';

			$diferenca_times = $time_inicial - $time_final;
			echo "A diferença de segundos entre a data final e a inicial é : $diferenca_times";
			echo '<br />';
			
			$segundos_existem_dia = 24 * 60 * 60;

			echo 'Um dia possui ' . $segundos_existem_dia . ' segundos.';
			echo '<br />';
			$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

			echo "Este vídeo foi gravado à : $diferenca_de_dias_entre_as_datas dias atrás.";


		?>



	</body>
</html>