<?php

	//modelo
	class Funcionario {

		//atributos
		public $nome = "Lucas";
		public $telefone = '99999-1111';
		public $numFilhos = 1;

		//métodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filho(s).";
		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();
	echo $y->resumirCadFunc();
	echo '<br />';
	$y->modificarNumFilhos(3);
	echo $y->resumirCadFunc();
	echo '<hr />';

	$x = new Funcionario();
	echo $x->resumirCadFunc();
	echo '<br />';
	$x->modificarNumFilhos(2);
	echo $x->resumirCadFunc();

?>