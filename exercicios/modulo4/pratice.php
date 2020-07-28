<?php 
session_start();

if($_SESSION['aviso']) {
	echo $_SESSION['aviso'];
	$_SESSION['aviso'] = '';
}
?>

<form method="POST" action="pratice2.php">
<div>
	<label for="nome">Nome:</label>
	<input type="name" name="nome">
</div>
<div>
	<label for="email">E-mail:</label>
	<input type="email" name="email">
</div>
<div>
	<label for="idade">Idade:</label>
	<input type="text" name="idade">
</div>
	<button>Enviar</button>
</form>