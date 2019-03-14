<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/atividades1.css">

    <title>Exercicio 3</title>
</head>

<body>
    <div class="container-fluid">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Digite o Salário e o Reajuste </label>
                <input type="text" class="form-control" name="salario" placeholder="Salário" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="reajuste" placeholder="Reajuste em %" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="calcular">Calcular</button>
            <br>
        </form>
    </div>

    <?php

        $salario = isset($_POST["salario"]) ? $_POST["salario"] : "";
        $reajuste = isset($_POST["reajuste"]) ? $_POST["reajuste"] : "";

        if (isset($_POST["calcular"])){

        $salarioFinal = (($salario*($reajuste/100)+$salario));

        echo "<div id='resposta' class='alert alert-primary'>
        <strong> Salário Atual </strong> $salario <br>
        <strong> Porcentagen de Reajuste </strong> $reajuste <br>
        <strong> Salário Reajustado </strong> $salarioFinal <br>
        </div>";

        } 

    ?>

</body>

</html>