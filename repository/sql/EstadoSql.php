<?php 
class EstadoSql
{
    public function obtenerEstados($conexion){
        $sql = $conexion->prepare("SELECT * FROM estado");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }
}
