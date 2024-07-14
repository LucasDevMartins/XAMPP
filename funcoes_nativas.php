<html>
	<head>
		<meta charset="utf-8" />
		<title>CURSO PHP</title>
	</head>

	<body>
		
		<h3>Funções Nativas</h3>
		
		<?php 

			$texto = 'Curso Completo de PHP';

			//string to lower =>Transforma todos os caracteres da string em minúsculos
			echo $texto;
			echo '<br />';
			echo strtolower($texto);
			echo '<br />';
			echo '<hr />';
			//string to upper => Transforma todos os caracteres da string em maiúsculos
			echo $texto;
			echo '<br />';
			echo strtoupper($texto);
			echo '<br />';
			echo '<hr />';
			//upper case first => Transforma o primeiro os caracter da string em maiúsculo
			echo $texto . '<br />';
			echo ucfirst($texto);
			echo '<br />';
			echo '<hr />';
			//string length => Conta a quantidade de caracteres de uma string
			echo $texto . '<br />';
			echo strlen($texto);
			echo '<br />';
			echo '<hr />';
			//string replace => Substitui uma cadeia de caracteres por outra dentro de uma string
			echo $texto . '<br />';
			echo str_replace('PHP', 'JavaScript', $texto);
			echo '<br />';
			echo '<hr />';
			//'Curso Completo de PHP'
			//C=0, u= 1, r=2 .... 20
			echo $texto . '<br />';
			echo substr($texto, 0, 14) . ' ...';
		?>



	</body>
</html>