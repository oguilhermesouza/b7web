<?php
$atributos = [
    'forca' => 60,
    'agilidade' => 80,
    'destreza' => 50,
    'vida' => 1000,
    'mana' => 928
];

$lista = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => $atributos
];

echo "NOME: " . $lista['nome'];
echo '<br>';
echo "FORÇA: " . $lista['atributos']['forca'];
echo '<br>';
echo "VIDA: " . $lista['atributos']['vida'];