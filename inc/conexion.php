<?php

/**
*   =====================
*   === conexión bbdd ===
*   =====================
*/

try {

    // conectar bbdd
    $bd = new mysqli('localhost','root','','carolina');

} catch(Exception $e) {
    
    // devuelve error
    // imprime error en caso de fallo
    echo $e -> getMessage();
    exit;
}

// === comprobación de conexión ===

/*

if($bd -> ping() ) {
    echo 'Todo bien';
} else {
    echo $bd -> connect_error;
}

*/

