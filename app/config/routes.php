<?php

// Este arquivo define todas as rotas da aplicação.
// O roteador irá carregá-lo para saber o que fazer.

// Rotas públicas da aplicação, renferiza as views públicas

// Rota raiz - redireciona para home
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');
$router->get('/vagas', 'VagasController@index');
$router->get('/about', 'AboutController@index');
$router->get('/contato', 'ContatoController@index');
$router->get('/planos', 'PlanosController@index');
