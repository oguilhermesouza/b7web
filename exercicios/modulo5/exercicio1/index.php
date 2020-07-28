<?php 

require_once 'autoload.php';

use \classe\Calculadora;

$calc = new Calculadora();
$calc->Add(12);
$calc->Add(2);
$calc->Sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->Add(0.5);


echo 'Total: '.$calc->getTotal();

$calc->clear();

