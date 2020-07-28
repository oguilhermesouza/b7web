<?php 
$nome = filter_input(INPUT_POST, 'nome');

if($nome) {
	$novoNome = '<li>'.$nome.'</li>';
	$listaNomes = file_get_contents('nome.txt');
	$listaNomes .= "\n$novoNome";
	file_put_contents('nome.txt', $listaNomes);
}else {
	echo "Preencha corretamente.";
	$listaNomes = file_get_contents('nome.txt');
}

?>

<form method="POST" action="#">
	<label for="nome">Novo Nome:</label>
	<input type="name" name="nome">
	<button>Adicionar</button>
</form>

<h3>Nomes Adicionados</h3>

<ul>
		<?php echo $listaNomes ?? ''; ?>
</ul>