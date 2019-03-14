<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/atividades1.css">

    <title>Equação de 2 Grau</title>
</head>

<body>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div class="container-fluid">
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Digite os Valores da Equação </label>
                    <input type="text" class="form-control" name="VarA" placeholder="Valor de A" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="VarB" placeholder="Valor de B" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="VarC" placeholder="Valor de C" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="valor">Calcular</button>
            </form>
    </div>
        <?php

    // Valores

    $a;
    $b;
    $c;
    $delta;

    $a = isset($_POST["VarA"]) ? $_POST["VarA"] : "";
    $b = isset($_POST["VarB"]) ? $_POST["VarB"] : "";
    ;
    $c = isset($_POST["VarC"]) ? $_POST["VarC"] : "";
    ;

    if (isset($_POST["valor"])) {

        //Delta
        $delta = ($b * $b) - ((4 * $a) * $c);
        //Equação
        $x1    = (-$b + sqrt($delta)) / (2 * $a);
        $x2    = (-$b - sqrt($delta)) / (2 * $a);

        //Exibindo os valores
        if ($delta < 0) {
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> Não existe raiz real quando delta é menor que zero </strong> <br>
            <strong> Valor de Delta </strong> $delta
            </div>";
        }

        if ($delta > 0) {
            echo "<div id='resposta' class='alert alert-primary'>
            <strong> Valor de Delta </strong> $delta <br>
            <strong> Valor de X1 </strong> $x1 <br> 
            <strong> Valor de X2 </strong> $x2
            </div>";
        }

    }
?>


</body>

</html>