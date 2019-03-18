<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="../css/atividades1.css">


    <title> Atividade 8 </title>

</head>

<body>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <div class="container-fluid">
    <form class="form-valores" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="Num1" placeholder="Digite o Primeiro Número" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Num2" placeholder="Digite o Segundo Número" required>
            </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block" name="Calcular">Calcular</button>
        <br /><a href="index.php" class="btn btn-outline-info"> Voltar </a>
    </form>
    </div>

    <?php
        $Num1 = isset ($_POST["Num1"])?$_POST["Num1"]:"";
        $Num2 = isset ($_POST["Num2"])?$_POST["Num2"]:"";

        $contador = $Num1;

		if(isset($_POST["Calcular"])){
			
			for($contador; $contador <= $Num2; $contador++){
                echo "<div id='resposta' class='alert alert-primary'> <strong> Tabuada do $contador </strong> <br>
                <strong> 1 X $contador = </strong>" . 1*$contador . "<br>
                <strong> 2 X $contador = </strong>" . 2*$contador . "<br>
                <strong> 3 X $contador = </strong>" . 3*$contador . "<br>
                <strong> 4 X $contador = </strong>" . 4*$contador . "<br>
                <strong> 5 X $contador = </strong>" . 5*$contador . "<br>
                <strong> 6 X $contador = </strong>" . 6*$contador . "<br>
                <strong> 7 X $contador = </strong>" . 7*$contador . "<br>
                <strong> 8 X $contador = </strong>" . 8*$contador . "<br>
                <strong> 9 X $contador = </strong>" . 9*$contador . "<br>
                <strong> 10 X $contador = </strong>" . 10*$contador . "<br>
                <strong> Fim da Tabuada do $contador </strong> <br> </div>";
				}
                
            
        }

      ?>

</body>

</html>