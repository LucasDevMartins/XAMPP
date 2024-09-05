<?php

require 'vendor/autoload.php';

$app = new \Slim\App;


/* Padrão PSR7 */
$app->get('/postagens', function($request, $response){

	/* Escreve no corpo da resposta utilizando o padrão PSR7 */
	$response->getBody()->write("Listagem de postagens");

	return $response;

} );

/*
Tipos de requisição ou Verbos HTTP

get -> Recuperar recursos do servidor (Select)
post -> Criar dado no servidor (Insert)
put -> Atualizar dados no servidor (Update)
delete -> Deletar dados do servidor (Delete)

*/

$app->delete('/usuarios/remove/{id}', function( $request, $response){

	$id = $request->getAttribute('id');
	
	/*
	Deletar do banco de dados com DELETE..
	....
	*/

	return $response->getBody()->write( "Sucesso ao deletar: " . $id );

} );

$app->put('/usuarios/atualiza', function($request, $response){

	//Recupera post ($_POST)
	$post  = $request->getParsedBody();
	$id    = $post['id'];
	$nome  = $post['nome'];
	$email = $post['email'];

	/*
	Atualizar no banco de dados com UPDATE..
	....
	*/

	return $response->getBody()->write( "Sucesso ao atualizar: " . $id );

} );

$app->post('/usuarios/adiciona', function( $request, $response){

	//Recupera post ($_POST)
	$post  = $request->getParsedBody();
	$nome  = $post['nome'];
	$email = $post['email'];

	/*
	Salvar no banco de dados com INSERT INTO..
	....
	*/

	return $response->getBody()->write( "Sucesso" );

} );

$app->run();