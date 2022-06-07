<?php
class TipoUsuarioSql
{
    public function obtenerTiposDeUsuarios($conexion)
    {
        $sql = $conexion->prepare("SELECT * FROM tipoUsuario");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }
}
