    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="logado.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Tela Inicial</title>
    </head>
    <body>  
        <nav>
            <div class="center">
                <!--icone do insta na header-->
                

                <?php 
                    session_start();
                    // Verifica se o usuário é um administrador
                    if (isset($_SESSION['adm']) && $_SESSION['adm'] == 1) {
                        
                        echo '<div class="adm">
                                <a href="cad_servicos.html" >Cadastrar Serviços</a> 
                                 <a href="ger_servicos.php" >Ver Serviços</a>
                                 <a href = "listar.php"> Gerenciar Horarios</a>
                              </div>';
                    }else{
                        echo'
                        <div class="user">
                            <a href="https://www.instagram.com/kelly_edina/ " id="insta" target="_blank"> <i class="bx bxl-instagram"></i></a>
                            <a href="meus_horarios.php"> Meus horarios</a>
                        </div>
                            ';
                        
                    }
                ?>

                        
            </div>
                <a href="logout.php" id="entrar">Sair</a>
        </nav>
        <h1>Meus Serviços</h1>
        <table>
            <tr>
                <th><img src="img/ex1.png" class="imagem-th"></th>
                <th><img src="img/ex2.png" class="imagem-th"></th>
                <th><img src="img/ex3.png" class="imagem-th"></th>
            </tr>
        </table>
        <div id="foot">
            <p>
                Gostou?<br>
                Agende Seu Horario Agora
                <a href="marc_horario.php">AQUI!</a>
            </p>
        </div>
    </body>
    </html>