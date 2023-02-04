<?php
    require_once("../config/conexion.php");
    require_once("../models/Producto.php");
    $producto = new Producto();

    switch($_GET["op"]){
        case "GetAll":
            $datos=$producto->get_producto();
            echo json_encode($datos);
        break;
    }
?>