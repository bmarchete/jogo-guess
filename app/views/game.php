<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../public/css/bst.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div style="padding-top: 30px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dados do jogo</h3>
                        </div>

                        <div class="panel-body">
                            <p>Tentativas:
                                <?= $game['attempts'] ?>
                            </p>
                            <p>Jogador:
                                <?= $game['player'] ?>
                            </p>
                          
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="painel" style="padding-top: 40px;">
                    <form method="post" action="/guess">

                        <h1 class="text-center">Digite o número!</h1>

                        <div class="form-group">
                            <input type="text" class="form-control" name="number" value="" autofocus autocomplete="off">
                        </div>

                        <button type="submit" class="btn btn-primary">Chutar!</button>

                </div>


            </div>
        </div>

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
               <div class="well">
                <p style="text-align: center">Neste momento, o número que você chutou é 
                <?php  echo $game['isMenor'] ? 'menor' : 'maior' ?> </p>

              </div>

            </div>
        </div>
    </div>

    <input type="hidden" name="easterEgg" value="<?= $_SESSION['guess'] ?>">
</body>

</html>