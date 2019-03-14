<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="css/atividades1.css">


    <title>Exercicio 9</title>
    </head>
    <body>
        
        <div class="container-fluid">
            <form method="post">
                    <p class="text-center"> Multiplos de 3 </p>
                <a href="index.php" class="btn btn-outline-info">Voltar</a>
            </form>
        </div>

        <?php

        for($i=1;$i<=200;$i++){
            if ($i%3==0){
                echo "<div id='resposta' class='alert alert-primary'> $i </div>";
            } 
            else {
            }
        }
        
        ?>

    </body>
</html>