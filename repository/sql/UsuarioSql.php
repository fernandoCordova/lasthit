<?php
class UsuarioSql
{

    public function validarNombreInvocador($nombreInvocador, $conexion)
    {
        $sql = $conexion->prepare("SELECT COUNT(idusuario) 
        FROM usuario 
        WHERE usuario.nombreInvocador = :nombreInvocador");
        $sql->bindParam(':nombreInvocador', $nombreInvocador);
        $sql->execute();
        $sql->fetchColumn() > 0 ? $existe = true : $existe = false;
        return $existe;
        $conexion = null;
    }

    public function validarUsuario($correo, $clave, $conexion)
    {
        $sql = $conexion->prepare("SELECT COUNT(idusuario) as cantidadUsuarios, idusuario
        FROM usuario
        WHERE usuario.correo = :correo
        AND usuario.clave = :clave ");
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }

    public function validarEstadoUsuario($idUsuario, $conexion)
    {
        $sql = $conexion->prepare("SELECT COUNT(idusuario) as cantidadUsuarios
        FROM usuario
        INNER JOIN estado
        ON usuario.estado_idestado = estado.idestado
        WHERE estado.estado = 'Habilitado'
        AND usuario.idusuario = :idUsuario ");
        $sql->bindParam(':idUsuario', $idUsuario);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }

    public function insertarUsuario($usuario, $conexion)
    {
        $correo = $usuario->getCorreo();
        $clave = $usuario->getClave();
        $nombreInvocador = $usuario->getNombreInvocador();
        $create = $usuario->getCreate();
        $tipoUsuario = $usuario->getTipoUsuario();
        $estado = $usuario->getEstado();
        $region = $usuario->getRegion();
        $sql = $conexion->prepare("INSERT INTO usuario (correo,clave,nombreInvocador,create_usuario,tipoUsuario_idtipoUsuario,estado_idestado,Region_idRegion)
        VALUES (:correo, :clave, :nombreInvocador, :create_usuario, :tipoUsuario_idtipoUsuario, :estado_idestado, :Region_idRegion)");
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->bindParam(':nombreInvocador', $nombreInvocador);
        $sql->bindParam(':create_usuario', $create);
        $sql->bindParam(':tipoUsuario_idtipoUsuario', $tipoUsuario);
        $sql->bindParam(':estado_idestado', $estado);
        $sql->bindParam(':Region_idRegion', $region);
        if ($sql->execute()) {
            return 1;
        } else {
            return 0;
        }
        $conexion = null;
    }

    public function obtenerUsuario($idUsuario, $conexion)
    {
        $sql = $conexion->prepare("SELECT *
        FROM usuario
        WHERE usuario.idusuario = :idUsuario");
        $sql->bindParam(':idUsuario', $idUsuario);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }
}
