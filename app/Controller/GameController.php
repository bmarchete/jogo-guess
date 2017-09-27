<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class GameController
{

    public function __construct()
    {
        session_start();
    }

    public function start()
    {
         $_SESSION['player'] = $_POST['player'];
         $_SESSION['attempts'] = 0;
         $_SESSION['guess'] = rand(0,1000);
         $_SESSION['isMenor'] = true;

        header('Location: /game');

    }

    public function game()
    {
        
        // if (isset($_POST['player'])) {
            
        // }

        // if (! array_key_exists('player', $_SESSION)) {
        //     header('Location: /');
        // }
        
        $game['attempts'] = $_SESSION['attempts'];
        $game['player'] = $_SESSION['player'];
        $game['isMenor'] = $_SESSION['isMenor'];

        require './app/views/game.php';

    }

    public function guess()
    {
        $_SESSION['attempts']++;

        if ($_POST['number'] == $_SESSION['guess']) {
         
            header('Location: /win');
            return;
        } 

        $_SESSION['isMenor'] = $_POST['number'] >= $_SESSION['guess'] ? false : true ;
        header('Location: /game');

    }

    public function win()
    {
        $game['attempts'] = $_SESSION['attempts'];
        $game['player'] = $_SESSION['player'];

        require './app/views/win.php';

    }

    public function save()
    {
        $q = new QueryBuilder();

        $game['attempts'] = $_SESSION['attempts'];
        $game['player'] = $_SESSION['player'];


        $q->insert('score', $game);

         header('Location: /score');
    }

    public function score()
    {
         $q = new QueryBuilder();
         $game = $q->select('score');

        //  usort($game, function($a, $b) {
        //     return $a['attempts'] <=> $b['attempts'];
        // });
         require './app/views/score.php';
    }
}
