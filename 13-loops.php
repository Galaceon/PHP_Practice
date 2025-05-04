<?php include 'includes/header.php';

// While
$i = 0;

while($i <10) {
    echo $i . "<br>";

    $i++;
}

// Do While
$i = 0;
do {
    echo $i . "<br>";

    $i++;
} while($i < 10);

// For loop
for($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// Foreach para un array
$clientes = ['Juan', 'Maria', 'Anto'];
foreach($clientes as $cliente) {
    echo $cliente . "<br>";
}

// Foreach para un array asociativo: valor unicamente
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
];
foreach($cliente as $valor) {
    echo $valor . "<br>";
}

// Foreach para un array asociativo: clave y valor
foreach($cliente as $valor => $valor) {
    echo $clave . " - " . $valor . "<br>";
}


include 'includes/footer.php';