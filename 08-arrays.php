<?php include 'includes/header.php';

$carrito = ['Tablet', 'Television', 'Ordenador'];


// Util para ver los contenidor de un array - MUY IMPORTANTE
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento de array
echo $carrito[1];

// Añadir un elemento en el indice deseado
$carrito[3] = 'pc';

// Añadir elemento nuevo al final
array_push($carrito, 'raton');

// Añadir elemento nuevo al inicio
array_unshift($carrito, 'teclado');

include 'includes/footer.php';