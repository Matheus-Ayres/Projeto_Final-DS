<?php
session_start();
include("sessao.php");
include("topo.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conexao = mysqli_connect('localhost', 'root', '', 'sal__o_da_kelly');

    if (!$conexao) {
        die("Conexão falhou: " . mysqli_connect_error());
    }

    $servicos = $_POST['servicos']; 
    $nome_do_cliente = $_SESSION['nome'];
    $horario = $_POST['horario'];

    // Verificar se o horário já está agendado por qualquer cliente
$horarioExistente = mysqli_query($conexao, "SELECT * FROM agendamentos WHERE horario = '$horario'");

if (mysqli_num_rows($horarioExistente) > 0) {
    echo "Este horário já está ocupado. Por favor, escolha outro horário.";
} else {
    // Inserir cada serviço selecionado como um agendamento separado
    foreach ($servicos as $servico) {
        $sql = "INSERT INTO agendamentos (servico, id_cliente, horario) VALUES ('$servico', '$nome_do_cliente', '$horario')";
        if (!mysqli_query($conexao, $sql)) {
            echo "Erro ao realizar o agendamento: " . mysqli_error($conexao);
        }
    }        
    echo "Agendamento realizado com sucesso!";
    header('Refresh:2; url=horario-marcado.html');
}


    mysqli_close($conexao);
} else {
    echo "Método de requisição inválido!";
}
?>