<?php
	
	class Exemplo {

		//Não é acessível através do operador ->
		public static $atributo1 = 'Eu sou um atributo estático';
		public $atributo2 = 'Eu sou um atributo normal';


		//Não pode utilixar o $this
		public static function metodo1() {
			echo 'Eu sou um método estático';
		}

		public function metodo2() {
			echo 'Eu sou um método normal';
		}
	}

	//$x = new Exemplo();
	/*
	echo Exemplo::$atributo1;
	echo '<br />';
	Exemplo::metodo1();
	*/
	Exemplo::metodo1();
	//Não é possível acessar, gerando um erro
	//echo $x->atributo1;


?>
