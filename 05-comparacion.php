<?php include 'includes/header.php';
// Algunos operadores son muy simples, pondre 2 de ejemplo mas 1 que me parece curioso
$numero1 = 20;
$numero2 = 30;



//Space ship(nave espacial):
// Este operador devuelve -1 si el primer valor es menor que el segundo, 0 si son iguales y 1 si el primero es mayor que el segundo
var_dump($numero1 <=> $numero2); // -1


include 'includes/footer.php';