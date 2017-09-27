<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':

        require './app/views/index.php';
        break;

    case '/game':
        $gameController->game();
        break;
    
    case '/start':
        $gameController->start();
        break;
    
    case '/win':
        $gameController->win();
        break;
    
    case '/guess':
        $gameController->guess();
        break;
    
    case '/save':
        $gameController->save();
        break;
    
    case '/score':
        $gameController->score();
        break;
    
    case '/logout':
        session_destroy();
        header('Location: /');
        break;
    
    default:
        die('Essa rota não é valida');
        break;
}
