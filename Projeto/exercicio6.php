<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/atividades1.css">


    <title>Exercicio 6</title>
    </head>
    <body>

        <div class="container-fluid">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Digite os Times e N° de Gols</label>
                <input type="text" class="form-control" name="timeCasa" placeholder="Time da Casa" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="golTimeCasa" placeholder="Gols do Time da Casa" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="timeVisit" placeholder="Time Visitante" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="golTimeVisitante" placeholder="Gol Time Visitante" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="calcular">Calcular</button>
        </form>
        </div>

        <?php
        $timeCasa = isset($_POST["timeCasa"]) ? $_POST["timeCasa"] : "";
        $TimeVisitante = isset($_POST["timeVisit"]) ? $_POST["timeVisit"] : "";
        $golCasa = isset($_POST["golTimeCasa"]) ? $_POST["golTimeCasa"] : "";
        $golVisit = isset($_POST["golTimeVisitante"]) ? $_POST["golTimeVisitante"] : "";
        
        if (isset($_POST["golTimeVisitante"])){

           if ($golCasa > $golVisit){
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> VENCEDOR: </strong> $timeCasa com $golCasa Gols<br>
            <strong> Valor de Delta </strong> $delta
            </div>";

        } else if ($golCasa < $golVisit){
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> VENCEDOR: </strong> $TimeVisitante com $golVisit Gols<br>
            </div>";

        } else if($golCasa == $golVisit) {
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> EMPATE </strong> <br>
            </div>";

        }
        }

        ?>

    </body>
</html>