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

    public function buscarIdRegion($plataforma, $conexion){
        $sql = "SELECT idregion FROM region WHERE plataforma = :plataforma";
        $query = $conexion->prepare($sql);
        $query->bindParam(':plataforma', $plataforma);
        $query->execute();
        $idRegion = $query->fetch(PDO::FETCH_ASSOC);
        return $idRegion;
    }
}
