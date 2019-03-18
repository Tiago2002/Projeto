<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="css/principal.css">
    <title> Home </title>
</head>

<body>
        <!--Cabeçalho-->
        <nav class="cabecalho">
            <div class="logo">
                <img src="images/logoCA.png" />
                <div class="pesquisar">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="menu">
                <ul>
                    <li> <a href="index.php">Inicio</a> </li>
                    <li> <a href="apresentacoes/index.php"> Sobre nós </a> </li>
                    <li> <a href="atividades/index.php"> Atividades </a> </li>
                    <li> <a href="contato/index.php"> Contato </a> </li>
                </ul>
            </div>
        </nav>
        <!--Fim do Cabeçalho-->

        <main>
            <div class="container">
                <h1>O que é PHP e do que ela é capaz?</h1>

                <p>O PHP é uma linguagem interpretada open source, que permite ao programador criar sites ou portais dinâmicos na Web 
                    com o uso de instruções que tornam possíveis coisas como acessar base de dados, ler e escrever arquivos no disco rígido do servidor, acessar dados do navegador cliente, 
                    controlar sessões HTTP, entre outras coisas. Com essa linguagem, você poderá, por exemplo, implementar um cadastro de clientes ou usuários, manipular e gravar dados 
                    de formulários ou mesmo codificar lojas virtuais.</p>

                <h2>O PHP só serve para sites pessoais?</h2>

                <p>O PHP, desde sua gênese, nasceu para Web e desde então, nunca a mudou. Ele se reinventou algumas vezes durante as décadas (sim, é uma linguagem nascida nos anos 90) 
                    e se estabeleceu com uma completa “plataforma web”. É utilizado pelas principais empresas de tecnologia do mercado e em grandes projetos. Algumas das grandes empresas que usam o PHP:
                        <strong> <a href="https://www.facebook.com/" target="_blank">Facebook</a>, <a href="https://www.google.com/" target="_blank">Google</a>, <a href="https://www.baidu.com/" target="_blank">Baidu</a>, 
                        <a href="https://www.wikipedia.org/" target="_blank">Wikipedia</a>, <a href="https://www.spotify.com/br/" target="_blank">Spotify</a>, <a href="https://www.uber.com/br/pt-br/" target="_blank">Uber</a></strong>, etc.</p>

                <p>Sim, o PHP foi criado despretensiosamente com o nome de <strong>“Personal Home Page Tools”</strong>. <a href="https://en.wikipedia.org/wiki/Rasmus_Lerdorf" target="_blanck"><em>Rasmus Lerdorf</em></a>, 
                o seu criador, o desenvolveu para cuidar da sua página pessoal. A plataforma foi ficando interessante, recebendo incrementos, até que, depois de algumas versões, Zeev e Andi Gutmans (co-fundadores da Zend Technologies) 
                reescreveram todo o core e lançaram a versão PHP 4. Nessa época que começou uma grande adoção da linguagem. Nos anos seguintes o PHP teve uma completa (nos seus termos e características) adição do paradigma de orientação a objetos, 
                entre outras melhorias estruturais, até chegarmos no ponto em que estamos hoje, na versão PHP 7 e não muito distantes da versão 8.</p>

                <h2>PHP é inseguro?</h2>

                <p>Nenhuma linguagem é estritamente segura. A segurança da informação não se restringe a apenas algumas linhas de código. Ela envolve redes e seus protocolos, sistema operacional, serviços externos que são utilizados e, claro, 
                    a parte que nos “toca” (como desenvolvedores), que é a “programação segura” e, na maioria dos casos, a insegurança de uma codificação se dá pela limitação de conhecimento técnico do desenvolvedor e não necessariamente por causa da tecnologia que ele está utilizando.</p>

                <p>Alguns dos macros tópicos que deveriam ser de domínio de todo desenvolvedor web (não importando a linguagem utilizada):</p>

                <ul>
                    <li>Conhecer o básico dos protocolos HTTP’s; </li>
                    <li>Validar e sanitizar inputs (nunca confiar no que receber do cliente), isso já previne futuros ataques XSS e também escapar os dados ao imprimir na tela para o cliente;</li>
                    <li>Sempre utilizar queries parametrizadas nas operações com o banco de dados. Isso elimina a possibilidade de SQL Injection;</li>
                    <li>Utilizar um moderno algoritmo de hashing para passwords (como o bcrypt ou, melhor ainda, Argon2 que tem ganhado adeptos na comunidade de segurança);</li>
                    <li>Utilizar https em todos os domínios;</li>
                    <li>Criar cookies seguros, que só funcionem via HTTPS e que não sejam acessados por JavaScript.</li>
                </ul>

                <p>Certamente há outros importantes tópicos, inclusive alguns mais relacionados a devOps. É importante buscar por esse tipo de conhecimento. Como desenvolvedores web não precisamos criar soluções 
                    para segurança, devemos apenas entender e utilizar as existentes. Não cabe a nós criarmos, por exemplo, uma library para criptografia, não é da nossa alçada, tem gente muito mais preparada para isso. 
                    Agora, é muito importante que conheçamos as opções disponíveis e como elas podem nos ajudar em nossos projetos.</p>

                <p>Pelo fato de o PHP ser o motor de alguns dos maiores Sistema de Gerenciamento de Conteúdo(CMS's) do mercado como: <em><a href="https://br.wordpress.com/" target="_blank">WordPress</a>, 
                    <a href="https://www.drupal.org/" target="_blank">Drupal</a>, <a href="https://www.joomla.org/" target="_blank">Joomla</a>, <a href="https://magento.com/" target="_blank">Magento</a></em>, etc, 
                    é comum ler e notar vulnerabilidades que são encontradas nessas plataformas. E isso não é problema, desde que você se preocupe em sempre a utilizar as últimas versões e desde que elas se mantenham atualizadas (que é o caso). 
                    Algumas vulnerabilidades não são especificamente do PHP e sim de algum módulo externo como OpenSSL ou algo relacionado ao sistema operacional. Sim, o PHP, como qualquer outra plataforma, possui vulnerabilidades, sempre teve, 
                    sempre vai ter, por isso é sempre importante utilizar as últimas versões estáveis das tecnologias que você trabalha (e isso vale para tudo, desde a linguagem, uma simples library ou até mesmo o seu sistema operacional).</p>

                <p>É razoavelmente comum sistemas legados rodando em versões antigas do PHP. Não dá para cravar que tais sistemas precisam ser reescritos e migrados, tudo depende da criticidade das informações que eles trabalham e 
                    como é feita a auditoria de segurança neles.</p>

                <h2>Mas o PHP não é uma linguagem orientada a objetos?</h2>

                <p>Realmente, o PHP não é uma linguagem orientada a objetos, ele implementa o paradigma de orientação a objetos. O PHP é multiparadigma. Não existe demérito algum nisso. Não é o fato de uma linguagem ser (em essência) orientada a objetos 
                    que a faz ser a solução para todos os problemas. Por exemplo, atualmente é notório um movimento e uma grande adoção por linguagens funcionais.</p>

                <p>A implementação de orientação a objetos no PHP é robusta e esse paradigma é o mais utilizado em todos os principais frameworks dele provindos. </p>

                <h2>Por que aprender PHP é um grande negócio?</h2>

                <p>Abaixo alguns motivos que eu considero relevante, mas que, claro, devem ser alinhados com os objetivos do seu projeto, a equipe que trabalhará nele etc.</p>

                <h3>1). É a linguagem mais utilizada para web, cerca de 82% de todos os sites a utilizam:</h3>

                <img src="images/uso_do_php.jpg" class="img-fluid" alt="Tabela Uso do PHP">

                <br/>

                <h3>2). Ela foi desenvolvida para a Web (isso é um fator de vantagem e competitividade para se manter no topo entre mais utilizadas);</h3>

                <img src="images/primeira_versaoPHP.jpg" class="img-fluid" alt="Primeira Versão PHP">

                <p>Isso pode ser observado no corpo do anúncio da primeira versão do PHP, postado em junho de 1995 no repositório Usenet newsgroup:</p>

                <h3>3). O suporte à linguagem é constante. Todo ano teremos uma nova minor version até a chegada de alguma nova major version.</h3>

                <p>Pode ser que demore um pouco menos ou um pouco mais de um ano, tudo vai depender da estabilidade das alterações. Mas essa é a ideia principal. 
                    E para cada nova minor version, têm-se dois anos de suporte (bugs e segurança).</p>

                <h3>4). O PHP possui um maduro e completo ecossistema para gerenciamento de dependências (com Composer e Packagist).</h3>

                <p>Hoje, isso é requisito de análise para a escolha de uma linguagem. Um gerenciador de dependências é parte fundamental para o desenvolvimento e manutenção dos projetos.</p>

                <p>O Composer (o gerenciador de dependências), nascido em 2011, mudou completamente a forma de se desenvolver com PHP. Eu separo a história do PHP em:</p>

                <ul>
                    <li>Pré-Composer;</li>
                    <li>Pós-Composer.</li>
                </ul>

                <p>O Packagist é o repositório oficial do Composer. números dele do dia 13/04/2012 até 03/04/2017:</p>

                <table border="1px solid black">
                    <tr>
                        <th>Pacotes registrados</th>
                        <th>Versões disponíveis</th>
                        <th>Pacotes instalados</th>
                    </tr>
                    <tr>
                        <td>134.508</td>
                        <td>804.269</td>
                        <td>4.264.652,569</td>
                    </tr>
                </table>

                <br/>

                <h3>5). O PHP é amplamente documentado na Web</h3>

                <p>Há documentação, artigos, dicas, discussões, fóruns, recursos etc. O PHP não nasceu “hoje”. Muitos problemas com suas soluções estão disponíveis na Web, muitos deles no Github.</p>

                <h3>6). O PHP possui excelentes e estabelecidos frameworks.</h3>

                <p>Alguns dos maiores expoentes do mercado e que estão andando junto com a evolução da linguagem:</p>

                <ul>
                    <li>Laravel 5</li>
                    <li>Symfony 3 (Em breve Symfony 4)</li>
                    <li>Zend Framework 3</li>
                    <li>Zend Expresive 2</li>
                    <li>CakePHP 3</li>
                    <li>Silex 2</li>
                    <li>Slim 3</li>
                    <li>CodeIgniter 3</li>
                </ul>
                <P>O Symfony, Laravel e Zend Framework elevaram o nível do desenvolvimento com PHP. Há cases de aplicações com milhares de requisições 
                    por segundo e que utilizam algum desses frameworks.</P>

                <h2>Qual o real objetivo aqui?</h2>

                <p>O nosso interesse não é afirmar que o PHP é a melhor linguagem, muito menos sugerir que você pare tudo e comece a estudá-lo. 
                    Essa ideia de “melhor linguagem” cai muito no terreno da “relatividade”. A melhor é que resolve o problema do seu projeto e que a sua equipe consegue trabalhar bem com ela.</p>

                <p>Algo muito importante que devemos ter em mente é:</p>

                <p>Uma linguagem de programação deve ser tratada como o “meio” para resolver um problema, não o “fim”.</p>

                <p>Isso quer dizer que, não importa que linguagem você venha a escolher, desde que ela consiga entregar o valor final do seu produto. 
                    A escolha de uma linguagem / plataforma, principalmente em um ambiente corporativo, em um grande projeto, se passa por muitas decisões que vão além da nossa opinião e gosto pessoal.</p>

                <p>A ideia aqui foi expor alguns pontos sobre PHP, que por muitas vezes é motivo de brincadeiras e até mesmo de julgamentos injustos.</p>
        </main>
        <footer class="container-fluid">
            <div class="footer-copyright text-center py-3">© 2019 - 
                <a href="http://eteccamargoaranha.com.br/"> Etec Professor Camargo Aranha</a> - Todos os direitos reservados.
            </div>
        </footer>
</body>

</html>