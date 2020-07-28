<?php 

// Condicional Ternária
echo "<h4> Condicional Ternária </h4>";
$idade = 20;
echo ($idade > 18) ? "Maior de Idade" : "Menor de idade";

// Condicional NULL CAO
echo "<h4> Condicional NULL CAO </h4>";

$nome;
echo $nome ?? 'Visitante';

// Condicional SWITCH
echo "<h4> Condicional SWITCH </h4>";

$tamanho = "M";

switch ($tamanho) {
	case 'P':
		echo "Pequena";
		break;
	case 'M':
		echo "Media";
		break;
	case 'G':
		echo "Grande";
		break;
}

// Condicional WHILE
echo "<h4> Loop WHILE </h4>";
$var = 0;

while($var < 10) {
	echo $var . ' ';

	$var += 1;
}

// Condicional FOR
echo "<h4> Loop FOR </h4>";

for ($i=0;$i<10;$i++) { 
	echo $i . ' ';
}

// Loop FOREACH
echo "<h4> Loop FOREACH </h4>";

$lista = [
	1 => 'Anilhas',
	'Barras',
	'Banco',
	'Halteres',
	'Dumbells',
	'Smith Machine'
];

foreach ($lista as $key =>$list) {
	echo "Item: ".$key.': '.$list . '<br>';
}

// Função
echo "<h4> Função </h4>";

function somar($n1, $n2) {
	$total = $n1+$n2;
	return($total);
}

echo somar(5, 5);

// Função com Referência
echo "<h4> Função com Referência </h4>";

function somar2($n1, $n2, &$total) {
	$total = $n1+$n2;
}

$soma=0;
somar2(2, 2, $soma);
echo $soma;

// Função Flecha ou Função ARROW
echo "<h4> Função Flecha ou Função ARROW </h4>";

$multiplicarPor2 = fn($valor) => $valor * 2;

echo $multiplicarPor2(10);

// Funções Nativas de Matematica
echo "<h4> Funções Nativas de Matemática </h4>";

$numero = 2.7;
echo floor($numero); // Arredonda pra baixo.
echo '<br>';
echo ceil($numero); // Arredonda pra cima.
echo '<br>';
echo round($numero); // Arredonda de acordo com o número, se 3.4 entao 3, se 3.6 então 4.
echo '<br>';
echo rand(0,10); // Gerando números aleatórios.
echo '<br>';
echo max(1,4,6,2); // Maior número da lista.
echo '<br>';
echo min(1,5,8); // Menor número da lista.

//Função Nativa de Array
echo "<h4> Funções Nativas de Array </h4>";

$aprovados = [8, 9, 5, 4, 7, 2];

$resultado = array_filter($aprovados, function($item){ //Array Filter
	if($item>=7) {
		return true;
	} else {
		return false;
	}
});

print_r($resultado);

echo '<br>';

if(in_array(9, $aprovados)) { // In Array para buscar dentro de um array.
	echo 'Encontrado';
} else {
	echo 'Não encontrado';
}

echo '<br>';

$arraysearch = array_search(9, $aprovados); // Array Search busca pelo valor dentro do array e retorna a posição do mesmo.

echo $arraysearch;

echo '<br>';

rsort($aprovados); // Ordena os valores do array do maior para o menor porém muda as chaves dos valores de acordo com as novas posições
print_r($aprovados);
echo "<br>";
asort($aprovados); //Ordena os valores do array do menor para o maior e mantém as chaves originais.
print_r($aprovados);
echo "<br>";
arsort($aprovados); //Ordena os valores do array do maior para o menor e mantém as chaves originais.
print_r($aprovados);

// Trabalhando com Data e Hora
echo "<h4> Trabalhando com Data e Hora </h4>";

echo date('d/m/Y H:i:s');