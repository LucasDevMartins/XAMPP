<?php

	namespace A;

	class Cliente implements \B\CadastroInterface {
		public $nome = 'Lucas';

		public function __construct() {
			echo '</pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar() {
			echo 'salvar';
		}

		public function remover() {
			echo 'remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}

	namespace B;

	class Cliente implements CadastroInterface {
		public $nome = 'Kelly';

		public function __construct() {
			echo '</pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function remover() {
			echo 'Removar';
		}
	}

	interface CadastroInterface {
		public function remover();
	}

	//---------------------------------

	$c = new \B\Cliente();
	echo '<pre>';
	print_r($c);
	echo '</pre>';
	echo $c->$nome;

?>
