<?php
    class Producto extends Conectar{
        public function get_producto(){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT producto_descripcion, producto_color, producto_marca, producto_categoria from producto WHERE producto_estado = 1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>