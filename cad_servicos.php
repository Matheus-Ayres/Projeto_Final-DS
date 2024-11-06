<?php
session_start();
include("sessao.php"); 

$conexao = mysqli_connect('localhost', 'root', '', 'sal__o_da_kelly');
if (!$conexao) {
    die("Erro ao conectar com o banco de dados: " . mysqli_connect_error());
}

$nome = $_POST['nome'];
$valor = $_POST['valor'];

$sql = "INSERT INTO servicos (nome, valor) VALUES ('$nome', '$valor')";
    if (mysqli_query($conexao, $sql)) {
        echo "Serviço cadastrado com sucesso!";
        header('refresh: 1; url = logado.php');
    } 


mysqli_close($conexao);
?>


