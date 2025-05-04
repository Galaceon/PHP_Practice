<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado || $admin) {
    echo "Usuario autenticado correctamente";
} else {
    echo 'Usuario no autenticado';
}

// if anidados
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'fecha_registro' => '2023-10-01'
    ]
];
if (!empty($cliente)) {
    echo 'El cliente existe';

    if ($cliente['saldo'] > 0) {
        echo 'El cliente tiene saldo';
    } else {
        echo 'El cliente no tiene saldo';
    }
}

// else if
if($cliente['saldo'] > 0) {
    echo 'El cliente tiene saldo';
} else if($cliente['informacion']['tipo'] === 'premium') {
    echo 'El cliente es premium';
} else {
    echo 'El cliente no tiene saldo y no es premium';
}


// switch
$tecnologia = 'PHP';

switch ($tecnologia) {
    case 'PHP':
        echo 'El lenguaje es PHP';
        break;
    case 'JavaScript':
        echo 'El lenguaje es JavaScript';
        break;
    default:
        echo 'Lenguaje no reconocido';
        break;
}

include 'includes/footer.php';