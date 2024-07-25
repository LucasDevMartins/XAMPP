<?php

	require "./blibliotecas/lib1/lib1.php";
	require "./blibliotecas/lib2/lib2.php";

	//apelidando utilizar o as
	use A\Cliente as C1;
	use B\Cliente;

	$c = new C1();
	print_r($c);
	echo $c->__get('nome');

	$c = new Cliente();
	print_r($c);
	echo $c->__get('nome');


?>
