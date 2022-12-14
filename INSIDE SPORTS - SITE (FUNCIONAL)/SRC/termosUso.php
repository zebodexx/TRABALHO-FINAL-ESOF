<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['fieldEmail']) == true) and (!isset($_SESSION['fieldSenha']) == true))
    {
        unset($_SESSION['fieldEmail']);
        unset($_SESSION['fieldSenha']);
        $estaLogado = 0;
    }
    else
    {
        $estaLogado = 1;
    }
    $sql = "SELECT nome FROM usuarios WHERE email = '$_SESSION[fieldEmail]'";
    $result = $conexao->query($sql);
    $user_data = mysqli_fetch_assoc($result);
    $logado = $user_data['nome'];
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="shortcut icon" href="../icone/favicon.ico">
        <title>Inside Sports : Termos de Uso</title>
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="home.php">
                        <img
                            src="../img/INSIDE_SPORTS_LOGO_VETORIZADO.png"
                            width="40"
                            height="40"
                            class="d-inline-block align-items-center"
                            alt=""
                        >
                        <b>Inside Sports</b>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="contact.php">Contato</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="navbarDropdownMenuLink"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    Produtos
                                </a>
                                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-white" href="vestuarioMasculino.php">Roupas Masculinas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="vestuarioFeminino.php">Roupas Femininas</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="tenisMasculinos.php">Tenis Masculino</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-white" href="tenisFeminino.php">Tenis Feminino</a>
                                </div>
                            </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <?php
                                        if($estaLogado == 1)
                                        {
                                            echo "<a class='nav-link text-white' href='areaCliente.php'>Logado como <b>$logado</b></a>";
                                        }
                                        else
                                        {
                                            echo "<a href='loginUsuario.php' class='nav-link text-white'>Login</a>";
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <?php
                                        if($estaLogado == 1)
                                        {
                                            echo "<a class='nav-link text-white' href='deslogarConta.php'>Sair</a>";
                                        }
                                        else
                                        {
                                            echo "<a href='cadastrarUsuario.php' class='nav-link text-white'>Cadastrar</a>";   
                                        }
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <span class="badge rounded-pill bg-light text-dark position-absolute ms-4 mt-0" titel="0 Produtos no Carrinho">
                                        <small>0</small>
                                    </span>
                                    <a href="cart.php" class="nav-link text-white">
                                        <i class="bi-cart" style="font-size:24px; line-height: 24px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <main class="flex-fill">
                    <div class="container">
                        <h2>1. Termos</h2>
                        <p>
                            Ao acessar ao site
                            <a href="home.php">Inside Sports</a>
                            , concorda em cumprir estes termos de servi??o, todas as leis e regulamentos aplic??veis ??????e concorda que ?? respons??vel pelo cumprimento de todas as leis locais aplic??veis. Se voc?? n??o concordar com algum desses termos, est?? proibido de usar ou acessar este site. Os materiais contidos neste site s??o protegidos pelas leis de direitos autorais e marcas comerciais aplic??veis.
                        </p>
                        <h2>2. Uso de Licen??a</h2>
                        <p>?? concedida permiss??o para baixar temporariamente uma c??pia dos materiais (informa????es ou software) no site Inside Sports , apenas para visualiza????o transit??ria pessoal e n??o comercial. Esta ?? a concess??o de uma licen??a, n??o uma transfer??ncia de t??tulo e, sob esta licen??a, voc?? n??o pode:</p>
                        <ol>
                            <li>modificar ou copiar os materiais;</li>
                            <li>usar os materiais para qualquer finalidade comercial ou para exibi????o p??blica (comercial ou n??o comercial);</li>
                            <li>
                                tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Inside Sports;
                            </li>
                            <li>remover quaisquer direitos autorais ou outras nota????es de propriedade dos materiais; ou</li>
                            <li>
                                transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.
                            </li>
                        </ol>
                        <p>Esta licen??a ser?? automaticamente rescindida se voc?? violar alguma dessas restri????es e poder?? ser rescindida por Inside Sports a qualquer momento. Ao encerrar a visualiza????o desses materiais ou ap??s o t??rmino desta licen??a, voc?? deve apagar todos os materiais baixados em sua posse, seja em formato eletr??nico ou impresso.</p>
                        <h2>3. Isen????o de responsabilidade</h2>
                        <ol>
                            <li>Os materiais no site da Inside Sports s??o fornecidos 'como est??o'. Inside Sports n??o oferece garantias, expressas ou impl??citas, e, por este meio, isenta e nega todas as outras garantias, incluindo, sem limita????o, garantias impl??citas ou condi????es de comercializa????o, adequa????o a um fim espec??fico ou n??o viola????o de propriedade intelectual ou outra viola????o de direitos.</li>
                            <li>Al??m disso, o Inside Sports n??o garante ou faz qualquer representa????o relativa ?? precis??o, aos resultados prov??veis ??????ou ?? confiabilidade do uso dos materiais em seu site ou de outra forma relacionado a esses materiais ou em sites vinculados a este site.</li>
                        </ol>
                        <h2>4. Limita????es</h2>
                        <p>Em nenhum caso o Inside Sports ou seus fornecedores ser??o respons??veis ??????por quaisquer danos (incluindo, sem limita????o, danos por perda de dados ou lucro ou devido a interrup????o dos neg??cios) decorrentes do uso ou da incapacidade de usar os materiais em Inside Sports, mesmo que Inside Sports ou um representante autorizado da Inside Sports tenha sido notificado oralmente ou por escrito da possibilidade de tais danos. Como algumas jurisdi????es n??o permitem limita????es em garantias impl??citas, ou limita????es de responsabilidade por danos conseq??entes ou incidentais, essas limita????es podem n??o se aplicar a voc??.</p>
                        <h2>5. Precis??o dos materiais</h2>
                        <p>Os materiais exibidos no site da Inside Sports podem incluir erros t??cnicos, tipogr??ficos ou fotogr??ficos. Inside Sports n??o garante que qualquer material em seu site seja preciso, completo ou atual. Inside Sports pode fazer altera????es nos materiais contidos em seu site a qualquer momento, sem aviso pr??vio. No entanto, Inside Sports n??o se compromete a atualizar os materiais.</p>
                        <h2>6. Links</h2>
                        <p>A Inside Sports n??o analisou todos os sites vinculados ao seu site e n??o ?? respons??vel pelo conte??do de nenhum site vinculado. A inclus??o de qualquer link n??o implica endosso por Inside Sports do site. O uso de qualquer site vinculado ?? por conta e risco do usu??rio.</p>
                    </p>
                    <h3>Modifica????es</h3>
                    <p>A Inside Sports pode revisar estes termos de servi??o do site a qualquer momento, sem aviso pr??vio. Ao usar este site, voc?? concorda em ficar vinculado ?? vers??o atual desses termos de servi??o.</p>
                    <h3>Lei aplic??vel</h3>
                    <p>Estes termos e condi????es s??o regidos e interpretados de acordo com as leis do Inside Sports e voc?? se submete irrevogavelmente ?? jurisdi????o exclusiva dos tribunais naquele estado ou localidade.</p>
                    <br>
                </div>
            </main>
            <footer class="border-top text-muted">
                <div class="bg-dark">
                    <div class="container">
                        <h6 class="text-Amarelo text-center pt-2">Formas de Pagamento</h6>
                        <div class="row py-4 d-flex aling-items-center">
                            <div class="col-md-12 text-center">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-american-express.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-amex.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-aura.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-banco-brasil.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-banco-do-brasil.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bndes-1.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bndes.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-boleto.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-bradesco.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-caixa-economica-federal.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-caixa-economica.svg" class="mr-4" width="50px">
                                <img src="../img/IMAGENS INSIDE/Formas de pagamento/fc-cielo.svg" class="mr-4" width="50px">
                                <hr class="text-Amarelo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row py-3">
                        <div class="col-12 col-md-4 text-center">
                            &copy; 2022 - Inside Sports Ltda ME
                            <br>
                            Rua Olegario Maciel, 221, Patos de Minas - MG
                            <br>
                            CNPJ 12.345.678/0001-21
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="politicasPrivacidade.php" class="text-decoration-none text-dark">Politicas de Privacidade</a>
                            <br>
                            <a href="termosUso.php" class="text-decoration-none text-dark">Termos de Uso</a>
                            <br>
                            <a href="aboutInsideSports.php" class="text-decoration-none text-dark">Quem Somos</a>
                            <br>
                            <a href="trocasDevloucoes.php" class="text-decoration-none text-dark">Trocas e Devolucoes</a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="contact.php" class="text-decoration-none text-dark">Contato pelo Site</a>
                            <br>
                            Email:
                            <a href="mailto:insideSports@gmail.com" class="text-decoration-none text-dark">insidesportsoficial@gmail.com</a>
                            <br>
                            Telefone:
                            <a href="phone:34999208912" class="text-decoration-none text-dark">(34) 9 9920-8912</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../javascript/index.js" charset="utf-8"></script>
        <script src="../javascript/jqueryIndex.js" charset="utf-8"></script>
    </body>
</html>
