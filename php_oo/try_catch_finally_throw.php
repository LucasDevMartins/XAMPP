<?php
	
	//Tente - > precisa finalizar com o catch ou com o finally
	try {

		//tenha uma lógica onde possa ocorrer um potencial erro (exceção)
		echo '<h3> *** Try *** </ h3>';

		//$sql = 'Select * from clientes';
		//mysql_query($sql); //Erro

		if(!file_exists('require_arquivo_a.php')) {
			//Lançar
			throw new Exception('O arquivo em questão deveria esta disponível as ' . date('d/m/Y H:i:s') . 'horas, mas não estava. Vamos seguir mesmo assim!');
		}

	//Pegue
	} catch (Error $e) {
		echo '<h3> *** Catch Error *** </ h3>';
		echo '<p style="color: red">' . $e; '</ p>';
		//armazenando esse erro em banco de dados
		
	//finalmente (opcional)
	} catch (Exception $e) {
		echo '<h3> *** Catch Exception *** </ h3>';
		echo '<p style="color: red">' . $e; '</ p>';
		//armazenando esse erro em banco de dados
	
	} finally {
		echo '<h3> *** Finally *** </ h3>';
	}

?>
