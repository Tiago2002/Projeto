<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/contato.css">
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Contato</title>

</head>

    <body>
        <!-- Cabeçalho -->
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
                    <li> <a href="../apresentacoes/index.php">Sobre nós</a> </li>
                    <li> <a href="../atividades/index.php">Atividades</a> </li>
                    <li> <a href="index.php">Contato</a> </li>
                </ul>
            </div>
        </nav>
        <!-- Fim do Cabeçalho -->
        <main>
            <div class="container-fluid">
                <form method="post" id="form1">
                    <h1>ENTRE EM CONTATO CONOSCO</h1>
                    <br>
                    <p>Tire todas as suas dúvidas ou envie suas sugestões para nossa equipe.</p>
                    <br>
                    <!-- Nome e Sobrenome -->
                    <div class="row">
                        <div class="col">
                            <label for="validationCustom01">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="col">
                            <label for="validationCustom02">Sobrenome</label>
                            <input type="text" class="form-control" placeholder="Sobrenome" required>
                        </div>
                    </div>
                    <br>
                    <!-- Email -->
                    <label for="inputEmail4">Email</label>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="email@exemplo.com" value="" required>
                        </div>
                    </div>
                    <!-- Assunto do email -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Assunto:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="assunto" placeholder="Assunto do email" value="" required></textarea>
                    </div>
                    <!-- Mensagem -->
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensagem:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="mensagem" placeholder="Escreva aqui sua mensagem" value="" required></textarea>
                    </div>

                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                        Enviar
                    </button>
                </form>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sua Mensagem foi enviada com sucesso</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            A sua Mensagem será analisada e respondida o mais rapído possível, obrigado por entrar em contato conosco
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="apagaForm()" data-dismiss="modal">Enviar outra mensagem</button>
                            <a href="../index.php">
                                <button class="btn btn-primary"> Inicio </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
                <script>
                    function apagaForm() {
                        document.getElementById('form1').reset();                
                    }
                </script>   
            </main>
            <footer>
                <div class="mb-5 flex-center">
                </div>
                <div class="footer-copyright text-center py-3">© 2019 - 
                    <a href="http://eteccamargoaranha.com.br/"> Etec Professor Camargo Aranha</a> - Todos os direitos reservados.
                </div>
            </footer>
    </body>
</html>