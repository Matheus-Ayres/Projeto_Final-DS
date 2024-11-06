<?php
include("sessao.php");
include("topo.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conexao = mysqli_connect
('localhost','root','','sal__o_da_kelly');
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$sql_ver = "SELECT * FROM cliente WHERE email = '$email'";
$ver = mysqli_query($conexao, $sql_ver);

if (mysqli_num_rows($ver) > 0) {
    echo "Já existe um cliente cadastrado com este e-mail.";
    echo "<a href='cadastrar.html'>Tentar Novamente</a>";
} else {

    $sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    $executar = mysqli_query($conexao, $sql);

    header('location:logado.php');
}

mysqli_close($conexao);
?>