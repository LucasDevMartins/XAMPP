<?php

	// $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	// $usuario = 'root';
	// $senha = '';

	/*
	try {
		$conexao = new PDO($dsn, $usuario, $senha);
		
		$query = '
		---*****--- CRIA UMA TABELA ---*****---

			create table if not exists tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(32) not null
			)
		';
		---*****---EXECUTA A QUERY ---*****---

		$retorno = $conexao->exec($query);
		//0
		echo $retorno;

		// $query = '
		---*****--- INSERE REGISTROS NA TABELA ---*****---

		// 	insert into tb_usuarios(
		// 		nome, email, senha
		// 	) values (
		// 		"Lucas Martins", "lucas.rodrigues@hotmail.com", "123456"
		// 	)
		// ';
		*/

		// $retorno = $conexao->exec($query);
		// echo $retorno;

	// 	try {
	// 	$conexao = new PDO($dsn, $usuario, $senha);

	// 	$query = '
	// 		select * from tb_usuarios where id = 6
	// 	';

	// 	$stmt = $conexao->query($query);
	// 	//retorna todos os registros da consulta
	// 	// ---***--- PDO::FETCH_ASSOC -> RETORNA OS INDICES ASSOCIATIVOS ---*****---
	// 	// ---***--- PDO::FETCH_NUM -> RETORNA OS INDICES ASSOCIATIVOS NUMÉRICOS ---*****---
	// 	// ---***--- PDO::FETCH_BOTH -> RETORNA OS INDICES ASSOCIATIVOS DE AMBOS ---*****---
	// 	// ---***--- PDO::FETCH_OBJ -> RETORNA UM ARRAY DE OBJETOS ---*****---
	// 	// $lista = $stmt->fetchAll(PDO::FETCH_OBJ);
	// 	$usuario = $stmt->fetch(PDO::FETCH_OBJ);

	// 	echo '<pre>';
	// 	print_r($usuario);
	// 	echo '</pre>';

	// 	//acesso associativo em array de objetos
	// 	// echo $lista[1]->nome;
	// 	echo $usuario->nome;
	// 	echo '</hr>';
	// 	//acesso associativo em array
	// 	// echo $lista[0]['nome'];
	// 	// echo '</br>';


	// } catch(PDOException $e) {
	// 	echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	// 	//registrar erro
	// }
	
	// 


		// ************************** SQL INJECTION

	if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

			$dns = 'mysql:host=localhost;dbname=php_com_pdo';
			$usuario = 'root';
			$senha = '';

			try {
				$conexao = new PDO($dns, $usuario, $senha);

				//query
				$query = "select * from tb_usuarios where ";
				$query .= "email = '{$_POST['usuario']}' ";
				$query .= "AND senha = '{$_POST['senha']}' ";

				echo $query;

				$stmt = $conexao->query($query);
				$usuario = $stmt->fetch();
				echo '<hr>';
				
				echo "<pre>";
				print_r($usuario);
				echo "</pre>";

			} catch (PDOException $e) {
				echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
			}
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>

	<body>

		<form method="post" action="index.php">
			<input type="text" placeholder="usuário" name="usuario">
			<hr>
			<input type="password" placeholder="senha" name="senha">
			<hr>
			<button type="submit">Entrar</button>
		</form>

	</body>
</html>