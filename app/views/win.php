<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../public/css/bst.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h1 class="alert-success">You did it!</h1>
                    <div class="well">
                         <p>Nome:
                        <?= $game['player']?>
                    </p>
                    <p>Tentativas:
                        <?= $game['attempts']?>
                    </p>
                    </div>
                   

                </div>

                <div id="painel">
                    <form method="post" action="/save">
                        <button type="submit" class="btn btn-primary btn-lg center-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    </form>
</body>

</html>