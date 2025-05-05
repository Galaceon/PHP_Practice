<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Camiseta',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ],
    [
        'nombre' => 'Teclado',
        'precio' => 100,
        'disponible' => true
    ]
];

echo "<pre>";
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //convertir a string

$json_array = json_decode($json); //convertir a array


var_dump($json); //ver el string
var_dump($json_array); //ver el array

echo "</pre>";
include 'includes/footer.php';