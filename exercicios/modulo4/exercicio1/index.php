<?php 
session_start();
$_SESSION['nome'] = $_POST['nome'];
if(!$_SESSION['nome']) {
	header('Location: login.php');
	exit;
}
echo 'Olá, '.$_SESSION['nome'].' - ';
?>

<a href="logout.php">Sair</a>