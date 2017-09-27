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

        #a{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

    </style>
</head>

<body>
   <div id="a" style="width: 60%;">
                <h1 style="padding-bottom: 30px;">Guess What!</h1>
                
                <form method="post" action="/start" >
                   <div class="form-group">
                        <input type="text" class="form-control" name="player" value="" placeholder="Digite seu nome">
                   </div>
                    <button type="submit" class="btn btn-lg btn-primary">Enviar</button>
                  
                </form>
   </div>
               
               
  
    </form>
</body>

</html>