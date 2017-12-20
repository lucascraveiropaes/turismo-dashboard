<?php
	session_cache_limiter(false);
	session_start();

	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');

	require 'vendor/autoload.php';

	$app = new \Slim\App(array(
		'settings' => [
	        'displayErrorDetails' => true
	    ],
		'templates.path' => 'views'
	));

	use Psr\Http\Message\RequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;

	/*
	** Função para ignorar a presença ou a falta de '/' no link
	**/
	$app->add(function (Request $request, Response $response, callable $next) {
	    $uri = $request->getUri();
	    $path = $uri->getPath();
	    if ($path != '/' && substr($path, -1) == '/') {
	        // permanently redirect paths with a trailing slash
	        // to their non-trailing counterpart
	        $uri = $uri->withPath(substr($path, 0, -1));
	        
	        if($request->getMethod() == 'GET') {
	            return $response->withRedirect((string)$uri, 301);
	        }
	        else {
	            return $next($request->withUri($uri), $response);
	        }
	    }

	    return $next($request, $response);
	});

	/*******************************************************************************\
	|                                                                               |
	|                                    Index                                      |
	|                                                                               |
	\*******************************************************************************/

	$container = $app->getContainer();
	$container['view'] = function ($container) {    
		return new \Slim\Views\PhpRenderer('./views');
	};

	// Teste
	/*$app->get('/a/{ t }', function ($request, $response, $param) {
	    
	    $data = array(
	      	'name' => $param['t']
      	);

		return $this->view->render($response, 'index.php', $data);
	});*/

	// Index
	$app->get('/', function ($request, $response, $args) {
		return $this->view->render($response, 'dashboard.php');
	});

	include './routes/lugares.php';

	include './routes/circuitos.php';


	$app->run();
?>