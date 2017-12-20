<?php
	/*
	** Rotas relacionadas à lugares
	**/

	// Lugares
	$app->get('/lugares', function ($request, $response, $args) {
		return $this->view->render($response, 'lugares-lista.php');
	});

	// Lugares Novo
	$app->get('/lugares/novo', function ($request, $response, $args) {
		return $this->view->render($response, 'lugares-novo.php');
	});

?>