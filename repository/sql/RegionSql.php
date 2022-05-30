<?php
class RegionSql
{
    public function obtenerRegiones($conexion)
    {
        $sql = "SELECT * FROM region";
        $query = $conexion->prepare($sql);
        $query->execute();
        $regiones = $query->fetchAll(PDO::FETCH_ASSOC);
        return $regiones;
    }
}
