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

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']; ?> </p>
        <p>Precio: <?php echo $producto['precio']; ?> </p>
        <p><?php echo ($producto['disponible']) ? 'Disponible' : 'No disponible'; ?> </p>
    </li>
    <?php
}


include 'includes/footer.php';