<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Antonio',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];
// Mostrar el array asociativo
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Añadir un nuevo elemento al array asociativo
$cliente['codigo'] = 123456;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Modificar un elemento del array asociativo
$cliente['saldo'] = 1300;
echo "<pre>";
var_dump($cliente);
echo "</pre>";


// Mostrar informacion de cualquier punto del array
echo "<pre>";
var_dump($cliente['informacion']['tipo']);
echo "</pre>";

include 'includes/footer.php';