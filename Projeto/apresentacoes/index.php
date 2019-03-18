<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../css/cards.css">
    <title> Sobre nós </title>
</head>

<body>

    <!--Cabeçalho-->
    <nav class="cabecalho">
        <div class="logo">
            <img src="../images/logoCA.png" />
            <div class="pesquisar">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="menu">
            <ul>
                <li> <a href="../index.php">Inicio</a> </li>
                <li> <a href="index.php"> Sobre nós </a> </li>
                <li> <a href="../atividades/index.php"> Atividades </a> </li>
                <li> <a href="../contato/index.php"> Contato </a> </li>
            </ul>
        </div>
    </nav>
    <!--Fim do Cabeçalho-->
    <div class="lista">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fernando</h5>
                <p class="card-text">Leia sobre Fernando, um dos integrantes do grupo</p>
                <a href="apresentacao_fernando.php" class="btn btn-outline-info">Ler sobre</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Gabriel</h5>
                <p class="card-text">Leia sobre Gabriel, um dos integrantes do grupo</p>
                <a href="apresentacao_gabriel.php" class="btn btn-outline-info">Ler sobre</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tiago</h5>
                <p class="card-text">Leia sobre Tiago, um dos integrantes do grupo</p>
                <a href="apresentacao_tiago.php" class="btn btn-outline-info">Ler sobre</a>
            </div>
        </div>
        <br /><a href="../index.php" class="btn btn-outline-info"> Voltar </a>
    </div>
    <footer class="container-fluid">
        <div class="footer-copyright text-center py-3">© 2019 - 
            <a href="http://eteccamargoaranha.com.br/"> Etec Professor Camargo Aranha</a> - Todos os direitos reservados.
        </div>
    </footer>
</body>

</html>