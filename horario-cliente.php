<?php
include('sessao.php');
include('topo.php');

$con = mysqli_connect('localhost', 'root', '', 'sal__o_da_kelly');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM agendamentos ORDER BY horario ASC";
$exe = mysqli_query($con, $sql);

while ($res = mysqli_fetch_array($exe)) {
    $servico = $res['servico'];
    $horario = $res['horario'];


    echo "
    <div class='ticket-options'>
        <div class='ticket'>
            <h2>Horarios Agendados</h2>
            <p>Serviço: $servico</p>
            <p>Horario: $horario</p>
        </div>
    </div>
    ";
}

$fecha = mysqli_close($con);


?>