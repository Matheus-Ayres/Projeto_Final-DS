<?php
session_start();

$email = $_POST['email'];
$senha = $_POST["senha"];
$conexao = mysqli_connect('localhost', 'root', '', 'sal__o_da_kelly');

$sql = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);

if ($res['email'] != null) {
    echo "Logado com sucesso!";
    
    // Armazenar o email, nome e status de adm na sessão
    $_SESSION['email'] = $res['email'];
    $_SESSION['adm'] = $res['adm'];
    $_SESSION['nome'] = $res['nome'];
    
    header('location:logado.php');
} else {
    echo "<script>alert('Login e/ou senha incorretos!'); window.location.href = 'login.html';</script>";
}

mysqli_close($conexao);
?>


