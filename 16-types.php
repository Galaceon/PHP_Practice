<?php 
declare(strict_types=1);
include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) : string|int {
    if($autenticado) {
        return 'Usuario autenticado';
    } else {
        return 44;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';

