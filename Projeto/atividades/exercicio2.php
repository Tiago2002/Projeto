<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/atividades1.css">

    <title>Anos/Meses/Dias</title>
</head>

<body>

    <div class="container-fluid">
        <form method="post">
            <label for="exampleInputEmail1"> Digite a quantidade de dias</label>
            <div class="form-group">
                <input type="text" class="form-control" name="quantidadeDias" placeholder="Dias" required>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="calcular">Calcular</button>
            <br /><a href="index.php" class="btn btn-primary btn-lg btn-block"> Voltar </a>
        </form>
    </div>

    <?php

        $quantidadeDias =isset($_POST["quantidadeDias"]) ? $_POST["quantidadeDias"] : "";
        $anoAux = 365;
        $mesAux = 30;
        $mes = 0;

        $strAno = " ";
        $strMes = " ";
        $strDia = " ";

    

        if(isset($_POST["calcular"])){ 
            
        $ano = (int) ($quantidadeDias / $anoAux);
        $restoAno = $quantidadeDias - ($ano * $anoAux);
        $dias = $restoAno - ($mes * $mesAux);
        $mes = (int) ($restoAno / $mesAux);

        if ($ano == 1){
            $strAno = " ano, ";
        } else {
           $strAno = " anos "; 
        }
        if ($mes == 1){
            $strMes = " mês e ";
        } else {
           $strMes = " meses e "; 
        }
        if ($dias == 1){
            $strDia = " dia.";
        } else {
           $strDia = " dias."; 
        }




        echo "<div id='resposta' class='alert alert-primary'>
            <strong> Dias inserido </strong> $quantidadeDias <br>
            <strong> Quantidade de Anos </strong> $ano $strAno <br> 
            <strong> Quantidade de Meses </strong> $mes </br>
            <strong> Quantidade de Dias </strong> $dias $strDia </br>
            </div>";
        }

      ?>

</body>

</html>