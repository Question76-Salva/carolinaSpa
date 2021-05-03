<?php

//* ==========================
//* === consulta a la bbdd ===
//* ==========================

//* ===  muestra múltiples productos ===
// $cantidad (de productos) como parámetro
// mínimo que muestre 1 producto

function obtenerProductos($cantidad = 10) {

    //* === importar conexión ===

    include 'conexion.php';

    try {

        //* === consulta SQL ===
        // en caso de que haya resultados
        // que todo sea correcto
        // mostrar X productos de la tabla

        $sql = "SELECT * FROM productos LIMIT $cantidad";

        //* === ejecutar consulta ===

        $resultado = $bd -> query($sql);


    } catch (Exception $e) {

        // en caso de fallo
        // mostramos el error

        echo $e -> getMessage();

        // retornar algo aunque sea vacio
        // para que el programa no falle
        return array();
    }

    return $resultado;
}


//* ===  muestra 1 solo producto ===
// "id" del producto como parámetro

function obtenerProducto($id_producto) {
    
    //* === importar conexión ===

    include 'conexion.php';

    try {

        //* === consulta SQL ===
        // en caso de que haya resultados
        // que todo sea correcto
        // mostrar 1 producto de la tabla
        // id1 -> producto1 / id2 -> producto2...

        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM productos WHERE id = $id_producto";

        //* === ejecutar consulta ===

        $resultado = $bd -> query($sql);


    } catch (Exception $e) {

        // en caso de fallo
        // mostramos el error

        echo $e -> getMessage();

        // retornar algo aunque sea vacio
        // para que el programa no falle
        return array();
    }

    return $resultado;

}