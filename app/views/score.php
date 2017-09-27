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
            <div class="col-md-12">
                <h1 class="text-center">Score</h1>
                
                <br>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Player</th>
                            <th>Attempts</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($game as $value) { ?>
                        
                        <tr>
                           
                            <td>
                                <?= $value['player'] ?>
                            </td>
                            <td>
                                <?= $value['attempts'] ?>
                            </td>


                        </tr>
                            <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>