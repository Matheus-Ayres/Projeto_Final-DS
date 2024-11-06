<?php
include("sessao.php");
echo"<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>";
echo"   <nav>
        <div>
           <a href='logado.php' id='voltar'> <i class='bx bx-arrow-back'></i> </a> 
        </div>
    </nav>
    ";
$conexao = mysqli_connect('localhost','root','','sal__o_da_kelly');
$sql = "SELECT * FROM servicos";
$executar = mysqli_query($conexao, $sql);

echo "<table border='1'><tr>
    <th>Id</th>
    <th>Nome</th>
    <th>valor</th>
    <th>Apagar</th>
</tr>";
while($resultado = mysqli_fetch_array($executar)){
    $id = $resultado['id'];
    $nome = $resultado['nome'];
    $valor = $resultado['valor'];
    echo "<tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$valor</td>
            <td><a href='del_servicos.php?id=$id'>Remover</a></td>
        </tr>";
}
echo "</table>";
$fechar = mysqli_close($conexao);

echo"<style>
    table{
    margin-top:100px;
    margin: 25%;
    width:50%;
    }

    nav{
    background-color: white;
    width: 100%;
    height: 50px;
    position: fixed;
    top: 0;
    border-radius: 0px;
}
    *{
    margin: 0;
    padding: 0;
}

body{
    background-color: black;
    font-family:'Jacques Francois', serif ;
    color: #D3B077  ;
}

#voltar{
    font-size: 40px;
    margin-left: 20px;
    color: black;
    transition: 0.3s;
}

#voltar:hover{
    color: #D3B077;
}


</style>"
?>