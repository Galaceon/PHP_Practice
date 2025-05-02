<?php include 'includes/header.php';

$nombre = "Antonio Jesus";

// Ver Extensión:
echo strlen($nombre);

// Eliminar Espacios Al Inicio y Al Final:
$texto = "    Hola Mundo    ";
$textoSinEspacios = trim($texto);
echo strlen($textoSinEspacios);

// Convertir a Mayúsculas:
echo strtoupper($nombre);

//Convertir a Minúsculas:
echo strtolower($nombre);

// Revisar si un string existe o no:
echo strpos($nombre, "Jesus");

// Reemplazar algo en una cadena de texto:
echo str_replace("Antonio", "Ant", $nombre);

// Dos formas de Concatenar:
echo "El cliente " . $nombre . " es premium";
echo "El cliente {$nombre} es premium";

// Repetir una cadena de texto:
echo str_repeat($nombre, 3);

// Obtener una parte de un string:
echo substr($nombre, 0, 6);


include 'includes/footer.php';