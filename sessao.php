<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];
	$adm = $_SESSION['adm'];
	$nome = $_SESSION['nome'];
	if($email == null){
		die("Usuário não autenticado!<a href='login.php'>Logar</a>");
	}
}
?>