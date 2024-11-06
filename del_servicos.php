<?php
include('sessao.php');
$conexao = mysqli_connect('localhost','root','','sal__o_da_kelly');
$id = $_GET['id'];
$sql = "DELETE FROM servicos WHERE id=$id";
echo $sql;
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    echo "Deletado com sucesso!";
    header('location:ger_servicos.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);

?>