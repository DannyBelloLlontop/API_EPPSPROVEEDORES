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

        public function get_producto_x_id($producto_id){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT producto_descripcion, producto_color, producto_marca, producto_categoria from producto WHERE producto_estado = 1 AND producto_id = ?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $producto_id);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>