<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="tela-inicial.css">
    <style>
        nav{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            text-decoration: underline;
            color: #D3B077;
        }
        ul li{
            list-style: none;
            display:inline;
            margin:5px;
        }
    </style>
</head>
<body>
        <?php
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
        ?>
        <ul>
            <?php if(isset($_SESSION['adm'])){?>
                <?php if($_SESSION['adm']==1){?>
                    <li><a href="logout.php">Sair</a></li>
                    <li><a href="cad_horario.php">Cadastrar Serviços</a></li>
                    <li><a href="listar.php">Gerenciar Horarios</a></li>
                    <th></th>
                    <?php }else{
                        ?><li><a href="logado.html">Tela Incial</a></li>
                        <li><a href="marc_horario.php">Marcar Horario</ahr></li>
                        <li><a href="horario-cliente.php">Ver horario</a></li>
                    <?php }?>
                <li><a href="logout.php">Sair</a></li>
                <?php }else{?>
                    <li><a href="login.html">Logar</a></li>
                <?php } ?>
        </ul>
    </nav>
</body>
</html>