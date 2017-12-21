<?php
	/*
	** Rotas relacionadas à lugares
	**/

	// Página de Lista de Lugares
	$app->get('/lugares', function ($request, $response, $args) {
		return $this->view->render($response, 'lugares-lista.php');
	});

	// Página Para Cadastrar Novo Lugar
	$app->get('/lugares/novo', function ($request, $response, $args) {
		return $this->view->render($response, 'lugares-novo.php');
	});
?>