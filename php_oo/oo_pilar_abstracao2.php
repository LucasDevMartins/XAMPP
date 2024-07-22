<?php

	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getters setters (overloading / sobrecargar)
		function __set($atributo, $valor) {
			$this->$atributo = $valor;
		}

		function __get($atributo) {
			return $this->$atributo;
		}

		//métodos
		function resumirCadFunc() {
			return "$this->nome possui $this->numFilhos filho(s) e seu telefone é $this->telefone.";

		}

		function modificarNumFilhos($numFilhos) {
			//afetar um atributo do objeto
			$this->numFilhos = $numFilhos;
		}
	}

	$y = new Funcionario();
	$y->__set('nome', 'Lucas');
	$y->__set('telefone', '1111-5555');
	$y->__set('numFilhos', 2);
	$y->__set('cargo', 'Analista de Suporte');
	$y->__set('salario', 2200.00);
	//echo $y->resumirCadFunc();
	echo $y->__get('nome') .  ' possui ' . $y->__get('numFilhos') . ' filho(s), seu telefone para contato é ' . $y->__get('telefone') . ' tendo como cargo ' . $y->__get('cargo') . ' com o salário de ' . $y->__get('salario');

	echo '<hr />';
	echo '<br />';
	$x = new Funcionario();
	$x->__set('nome', 'Kelly');
	$x->__set('telefone', '00000-2222');
	$x->__set('numFilhos', 0);
	$x->__set('cargo', 'Analista Contábil');
	$x->__set('salario', 3000.33);
	echo $x->__get('nome') .  ' possui ' . $x->__get('numFilhos') . ' filho(s), seu telefone para contato é ' . $x->__get('telefone') . ' tendo como cargo ' . $x->__get('cargo') . ' com o salário de ' . $x->__get('salario');
	


?>