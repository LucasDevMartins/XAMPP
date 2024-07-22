<?php

	//modelo
	class Funcionario {

		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		//setters
		function setNome($nome) {
			$this->nome = $nome;
		}

		function setTelefone($telefone) {
			$this->telefone = $telefone;
		}

		function setNumFilhos($numFilhos) {
			$this->numFilhos = $numFilhos;
		}

		//getters
		function getNome() {
			return $this->nome;
		}

		function getTelefone() {
			return $this->telefone;
		}

		function getNumFilhos() {
			return $this->numFilhos;
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
	$y->setNome('Lucas');
	$y->setnumFilhos(0);
	$y->setTelefone('11111-9999');
	//echo $y->resumirCadFunc();
	echo $y->getNome() .  ' possui ' . $y->getNumFilhos() . ' filho(s)';

	echo '<hr />';
	echo '<br />';
	$x = new Funcionario();
	$x->setNome('Kelly');
	$x->setnumFilhos(1);
	$x->setTelefone('2222-4444');
	echo $x->getNome() .  ' possui ' . $x->getNumFilhos() . ' filho(s) e seu telefone é '. $x->getTelefone() . '.';
	

?>