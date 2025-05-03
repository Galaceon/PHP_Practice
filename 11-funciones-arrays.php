<?php include 'includes/header.php';

$carrito = ['tablet', 'television', 'computadora', 'celular'];

$cliente = [
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Antonio'
];


// in_array - buscar elementos en un array
var_dump( in_array('tablet', $carrito)); // true
var_dump( in_array('teclado', $carrito)); // false


// Ordenar elementos en un array
$numeros = [1, 3, 6, 2, 4, 5];
sort($numeros); // Ordena de menor a mayor
rsort($numeros); // Ordena de mayor a menor

echo "<pre>";
print_r($numeros);
echo "</pre>";


// Ordenar array asociativo

asort($cliente); // Ordena por valores(A - Z)
arsort($cliente); // Ordena por valores(Z - A)
ksort($cliente); // Ordena por llaves(A- Z)
krsort($cliente); // Ordena por llaves(Z - A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
