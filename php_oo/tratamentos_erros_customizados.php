<?php 

	class MinhaExceptionCustomizada extends Exception {

		private $erro = '';

		public function __construct($erro) {
			$this->erro = $erro;
		}

		public function exibirMensagemErroCustomizada() {
			echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white; ">';
				echo $this->erro;
			echo '</div>';
		}
	}
	
	try {

		throw new MinhaExceptionCustomizada('Esse é um erro de teste');

		//Error função nativa do (php)
		//Exception lançada (programadores)
		//Customizadas Criação  (programadores)

	} catch (MinhaExceptionCustomizada $e) {
		echo $e->exibirMensagemErroCustomizada();
	}

?>