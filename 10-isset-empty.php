<?php include 'includes/header.php';

$ciudades = [];
$nombres = ['Juan', 'Maria', 'Anto'];
$mascota = [
    'nombre' => 'Mortimer',
    'color' => 'naranja',
    'tipo' => 'gato',
    'comida' => [
        'dulces' => 'turron',
        'salad' => 'atún',
        'snacks' => 'galletas',
    ]
];

// empty: Revisa si un array esta vacío
var_dump(empty($ciudades)); // true
var_dump(empty($nombres)); // false


// isset: Revisar si un array esta creado
var_dump(isset($nombres)); // true
var_dump(isset($ciudades)); // true
var_dump(isset($frutas)); // false

// isset: Revisar si existe una propiedad en un array
var_dump(isset($nombres['Maria'])); // false
var_dump(isset($nombres['Pedro'])); // false
var_dump(isset($nombres[0])); // true
var_dump(isset($mascota['comida']['dulces'])); // true

include 'includes/footer.php';