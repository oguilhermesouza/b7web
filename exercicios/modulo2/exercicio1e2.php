<?php 
// Exercicio 1
echo "<h4> Exercicio 1</h4>";

for ($a=0; $a < 10 ; $a++) { 
   for ($b=0; $b<10; $b++)  {
    echo '-';
   } 
    echo '<br/>';
}

//Exercicio 2
echo "<h4> Exercicio 2</h4>";

for ($x=0; $x <= 20 ; $x++) { 
    echo "</br>";
    for($y = 1; $y <= $x ; $y++) {
        echo "-"." ";
    }
}