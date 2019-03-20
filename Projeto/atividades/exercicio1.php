<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/atividades1.css">


    <title>Exercicio 1</title>
    </head>
    <body>
        <div class="container-fluid">
                  <form method="post">
                  <div class="form-group">
                  <label for="exampleInputEmail1">Digite os Valores das Varíaveis</label> 
                    <input type="text" name="numUm" class="form-control" id="formGroupExampleInput" placeholder="Varíavel A">
                  </div>
                  <div class="form-group">
                    <input type="text" name="numDois" class="form-control" id="formGroupExampleInput2" placeholder="Varíavel B">
                  </div>
                   <button type="submit" name="troca" class="btn btn-primary btn-lg btn-block">Trocar</button>
                   <br /><a href="index.php" class="btn btn-primary btn-lg btn-block"> Voltar </a>
                </form>
        </div>

        <?php
        $varUm = isset($_POST["numUm"]) ? $_POST["numUm"] : "";
        $varDois = isset($_POST["numDois"]) ? $_POST["numDois"] : "";
        $varTres = $varDois;
        $varDois = $varUm;
        $varUm = $varTres;

        if(isset($_POST["troca"])){
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> Varíavel Um: </strong> $varUm <br>
            <strong> Varíavel Dois: </strong> $varDois <br> 
            </div>";
        }
        ?>
        
    </body>
</html>