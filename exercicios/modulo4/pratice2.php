<?php 
session_start();
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // Evita sql injection 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // Mantem apenas os numeros

if($nome && $email) {
	echo 'Nome: '.$nome;
	echo "<br>";
	echo 'E-mail: '.$email;
	echo "<br>";
	echo 'Idade: '.$idade;
} else {
	$_SESSION['aviso'] = 'Preencha corretamente os dados.';
	header('Location: pratice.php');
	exit;
}
?>
<br>
<a href="pratice.php">Voltar</a>