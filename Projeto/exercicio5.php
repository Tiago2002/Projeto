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
        				<input type="text" class="form-control" id="formGroupExampleInput" name="Num1" placeholder="Valor 1°">
      				</div>
                       <div class="form-group">
        				<input type="text" class="form-control" id="formGroupExampleInput" name="Num2" placeholder="Valor 2°">
      				</div>
                       <div class="form-group">
        				<input type="text" class="form-control" id="formGroupExampleInput" name="Num3" placeholder="Valor 3°">
      				</div>
                        <div class="form-group">
        				<input type="text" class="form-control" id="formGroupExampleInput" name="Num4" placeholder="Valor 4°">
      				</div>
                         <div class="form-group">
        				<input type="text" class="form-control" id="formGroupExampleInput" name="Num5" placeholder="Valor 5°">
      				</div>
                  <button type="submit" class="btn btn-primary" name="Calcular">Calcular</button>
            </form>
        </div>
    <?php
    // Variaveis usadas

  	$Num = array(5);
	$Menor1 = 0;
	$Maior1 = 0;
	$Menor2 = 0;
	$Maior2 = 0;
	

    $Num[0] = isset($_POST["Num1"])?$_POST["Num1"]:"";
    $Num[1] = isset($_POST["Num2"])?$_POST["Num2"]:"";
    $Num[2] = isset($_POST["Num3"])?$_POST["Num3"]:"";
    $Num[3] = isset($_POST["Num4"])?$_POST["Num4"]:"";
    $Num[4] = isset($_POST["Num5"])?$_POST["Num5"]:"";
    
    $Menor1 = (min(array($Num[0],$Num[1],$Num[2],$Num[3],$Num[4])));
    $Maior1 = (max(array($Num[0],$Num[1],$Num[2],$Num[3],$Num[4])));
	
    // Calculos do Segundo Maior/Menor (Aqui começa a gambiarra tensa)
    if($Menor1 == $Num[0]){
        $Menor2 = (min(array($Num[1],$Num[2],$Num[3],$Num[4])));
    }
    if($Menor1 == $Num[1]){
        $Menor2 = (min(array($Num[0],$Num[2],$Num[3],$Num[4])));
    }
    if($Menor1 == $Num[2]){
        $Menor2 = (min(array($Num[0],$Num[1],$Num[3],$Num[4])));
    }
    if($Menor1 == $Num[3]){
        $Menor2 = (min(array($Num[0],$Num[1],$Num[2],$Num[4])));
    }
    if($Menor1 == $Num[4]){
        $Menor2 = (min(array($Num[0],$Num[1],$Num[2],$Num[3])));
    }
    
    //Maior
    if($Maior1 == $Num[0]){
        $Maior2 = (max(array($Num[1],$Num[2],$Num[3],$Num[4])));
    }
    if($Maior1 == $Num[1]){
        $Maior2 = (max(array($Num[0],$Num[2],$Num[3],$Num[4])));
    }
    if($Maior1 == $Num[2]){
        $Maior2 = (max(array($Num[0],$Num[1],$Num[3],$Num[4])));
    }
    if($Maior1 == $Num[3]){
        $Maior2 = (max(array($Num[0],$Num[1],$Num[2],$Num[4])));
    }
    if($Maior1 == $Num[4]){
        $Maior2 = (max(array($Num[0],$Num[1],$Num[2],$Num[3])));
    }
    
    // Aqui Conclui Verifição dos Numeros e começa a verificação dos menores
    
    if(isset($_POST["Calcular"])){
        
        echo "<div id='resposta' class='alert alert-primary'>
            <strong> 1° Menor Número </strong> $Menor1 <br>
            <strong> 2° Menor Número </strong> $Menor2 <br>
            <strong> 1° Maior Número </strong> $Maior1 <br>
            <strong> 2° Maior Número </strong> $Maior2 <br>
            </div>"; 
    }

?>

  </body>
</html>