<?php
//declaração dos namespaces dos controladores e instanciação dos objetos
use Project\Controller\GameController;
$gameController = new GameController();


//configuração do banco de dados
$_ENV['config'] = [
    'host' => 'localhost',
    'dbname' => 'bd',
    'user' => 'root',
    'password' => ''
];
