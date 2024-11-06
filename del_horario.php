<?php
include('sessao.php');
$conexao = mysqli_connect('localhost','root','','sal__o_da_kelly');
$id = $_GET['id'];
$sql = "DELETE FROM agendamentos WHERE id=$id";
echo $sql;
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    header('location:listar.php');
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);

?>