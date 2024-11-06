<?php 
include('sessao.php');

$con = mysqli_connect('localhost', 'root', '', 'sal__o_da_kelly');
$sql = "SELECT * FROM servicos ORDER BY nome ASC";
$exe = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="marc_horario.css">
</head>
<body>
    <img src="img/logo_salao.png" id="logo">

    <!-- Formulário de agendamento -->
    <div id="form">
        <form action="form.php" method="POST">
            <label for="escolha">Escolha o serviço</label>
            <div id="checkboxes">
                <?php
                
                    while ($res = mysqli_fetch_array($exe)) {
                        $nome = $res['nome']; 
                        $valor = $res['valor'];
                        $id_servico = $res['id']; 
                        echo "<div class='checkbox'>";
                        echo "<input type='checkbox' name='servicos[]' value='$nome'> <span>$nome - R$$valor</span>";
                        echo "</div>";  
                    }
                ?>
            </div>
            <label for="horario">Horário</label>
            <input type="datetime-local" name="horario" id="horario" step="3600" required>

            <input type="submit" value="Enviar" id="botao">
        </form>
    </div>

</body>
</html>
