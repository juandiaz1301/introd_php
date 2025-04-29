<?php
    // script para crear una conexion con la BD

    // parametros requeridos para la conexion con la BD 

    // parametros BD local
    /*DEFINE('USER', 'root'); // Crea la constante USER con valor 'root'
    DEFINE('PW', '');
    DEFINE('HOST', 'localhost');
    DEFINE('BD', 'empresa');*/

    // Parámetros BD remota (infinityfree)
    DEFINE('USER', 'if0_38542084'); // Crea la constante USER con valor 'if0_38542084'
    DEFINE('PW', 'juandiaz13301');
    DEFINE('HOST', 'sql100.infinityfree.com');
    DEFINE('BD', 'if0_38542084_empresa');

    // conxion con la BD 
    $conexion = mysqli_connect(HOST, USER, PW, BD);

    // Establecer conjunto de caracteres para el hosting 
    mysqli_set_charset($conexion, "utf8mb4");

    // verificar la conexion con la BD 
    if (!$conexion)
    {
        die("La conexión con la BD falló: " + mysqli_error($conexion));
        exit();
    }
    else
    /*{
        die("Conexión exitosa!");
    }*/
?>