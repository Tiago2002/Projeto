<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/atividades1.css">


    <title> Atividade 7 </title>
  </head>
  <style>
  </style>
  <body>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <div class="container-fluid">
    	  <form method="post">
     		 <div class="form-group">
          		<label for="formGroupExampleInput">Bem Vindo ao Caixa Eletrônico, Digite o Valor a ser sacado</label>
       			 <input type="text" class="form-control" id="formGroupExampleInput" name="Valor" placeholder="Valor">
      		 </div>
      		<button type="submit" class="btn btn-primary btn-lg btn-block">Sacar</button>
    	</form>
    </div>
    <?php
    //Variaveis usadas
    $Valor;
    
    $N100 = 100;
    $N50  = 50;
    $N20  = 20;
    $N10  = 10;
    $N5   = 5;
    $N2   = 2;
    $C1   = 1;
    $C50  = 0.50;
    $C25  = 0.25;
    $C10  = 0.10;
    $C5   = 0.5;
    
    $AuxN100 = 0;
    $AuxN50  = 0;
    $AuxN20  = 0;
    $AuxN10  = 0;
    $AuxN5   = 0;
    $AuxN2   = 0;
    $AuxC50  = 0;
    $AuxC25  = 0;
    $AuxC10  = 0;
    $AuxC10  = 0;
    $AuxC5   = 0;
    $AuxC1   = 0;

    $Valor = isset($_POST["Valor"]) ? $_POST["Valor"] : "";

    while ($Valor >= $N100) {
        $Valor = $Valor - $N100;
        $AuxN100++;
    }
    
    while ($Valor >= $N50) {
        $Valor = $Valor - $N50;
        $AuxN50++;
    }
    
    while ($Valor >= $N20) {
        $Valor = $Valor - $N20;
        $AuxN20++;
    }
    
    while ($Valor >= $N10) {
        $Valor = $Valor - $N10;
        $AuxN10++;
    }
    
    while ($Valor >= $N5) {
        $Valor = $Valor - $N5;
        $AuxN5++;
    }
    
    while ($Valor >= $N2) {
        $Valor = $Valor - $N2;
        $AuxN2++;
    }
    
    while ($Valor >= $C1) {
        $Valor = $Valor - $C1;
        $AuxC1++;
    }
    
    while ($Valor >= $C50) {
        $Valor = $Valor - $C50;
        $AuxC50++;
    }
    
    while ($Valor >= $C25) {
        $Valor = $Valor - $C25;
        $AuxC25++;
    }
    
    while ($Valor >= $C10) {
        $Valor = $Valor - $C10;
        $AuxC10;
    }
    
    while ($Valor >= $C5) {
        $Valor = $Valor - $C5;
        $AuxC5;
    }
    
    if ($Valor < 0.5) {
        $Valor = 0;
    }
    
    if (isset($_POST["Valor"])) {
            
        echo"<div id='resposta' class='alert alert-primary'>
                <strong> Notas de Cem Reais: </strong> $AuxN100 </br>
                <strong> Notas de Cinquenta Reais: </strong> $AuxN50 </br>
                <strong> Notas de Vinte Reais: </strong> $AuxN20 </br>
                <strong> Notas de Dez Reais: </strong> $AuxN10 </br>
                <strong> Notas de Dois Reais: </strong> $AuxN5 </br>
                <strong> Moedas de Um Real: </strong> $AuxC1 </br>
                <strong> Moedas de Cinquenta Centavos: </strong> $AuxC50 </br>
                <strong> Moedas de Vinte e Cinco Centavos: </strong> $AuxC25 </br>
                <strong> Moedas de Dez Centavos: </strong> $AuxC10 </br>
                <strong>Moedas de Cinco Centavos: </strong> $AuxC5 </br>
            </div> ";
    }

?>

  </body>
</html>