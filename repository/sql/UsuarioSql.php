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

    public function validarUsuario($correo, $nombreInvocador, $conexion)
    {
        $sql = $conexion->prepare("SELECT COUNT(idusuario) as cantidadUsuarios, idusuario
        FROM usuario
        WHERE usuario.correo = :correo
        OR usuario.nombreInvocador = :nombreInvocador");
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':nombreInvocador', $nombreInvocador);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }

    public function validarUsuarioLogin($correo, $clave, $conexion)
    {
        $sql = $conexion->prepare("SELECT COUNT(idusuario) as cantidadUsuarios, idusuario
        FROM usuario
        WHERE usuario.correo = :correo
        AND usuario.clave = :clave");
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

    public function modificarUsuario($usuario, $idusuario, $conexion)
    {
        $correo = $usuario->getCorreo();
        $clave = $usuario->getClave();
        $nombreInvocador = $usuario->getNombreInvocador();
        $update = $usuario->getUpdate();
        $tipoUsuario = $usuario->getTipoUsuario();
        $estado = $usuario->getEstado();
        $region = $usuario->getRegion();
        $sql = $conexion->prepare("UPDATE usuario SET correo = :correo, clave = :clave, nombreInvocador = :nombreInvocador, update_usuario = :update_usuario, tipoUsuario_idtipoUsuario = :tipoUsuario_idtipoUsuario, estado_idestado = :estado_idestado, Region_idRegion = :Region_idRegion WHERE idusuario = :idusuario");
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':clave', $clave);
        $sql->bindParam(':nombreInvocador', $nombreInvocador);
        $sql->bindParam(':update_usuario', $update);
        $sql->bindParam(':tipoUsuario_idtipoUsuario', $tipoUsuario);
        $sql->bindParam(':estado_idestado', $estado);
        $sql->bindParam(':Region_idRegion', $region);
        $sql->bindParam(':idusuario', $idusuario);
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
        INNER JOIN region
        ON usuario.Region_idRegion = region.idRegion
        WHERE usuario.idusuario = :idUsuario");
        $sql->bindParam(':idUsuario', $idUsuario);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }

    public function obtenerListadoUsuarios($conexion)
    {
        $sql = $conexion->prepare("SELECT *
        FROM usuario
        INNER JOIN tipousuario
        ON usuario.tipoUsuario_idtipoUsuario = tipousuario.idtipoUsuario
        INNER JOIN estado
        ON usuario.estado_idestado = estado.idestado
        INNER JOIN region
        ON usuario.Region_idRegion = region.idRegion");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    }

    public function actualizarClave($idusuario, $nuevaclave, $update, $conexion)
    {
        $sql = $conexion->prepare("UPDATE usuario SET clave = :nuevaclave, update_usuario = :update_usuario WHERE idusuario = :idusuario");
        $sql->bindParam(':nuevaclave', $nuevaclave);
        $sql->bindParam(':update_usuario', $update);
        $sql->bindParam(':idusuario', $idusuario);
        if ($sql->execute()) {
            return 1;
        } else {
            return 0;
        }
        $conexion = null;
    }

    public function actualizarInvocador($idusuario, $nuevoNombreInvocador, $update, $conexion)
    {
        $sql = $conexion->prepare("UPDATE usuario SET nombreInvocador = :nuevoNombreInvocador, update_usuario = :update_usuario WHERE idusuario = :idusuario");
        $sql->bindParam(':nuevoNombreInvocador', $nuevoNombreInvocador);
        $sql->bindParam(':update_usuario', $update);
        $sql->bindParam(':idusuario', $idusuario);
        if ($sql->execute()) {
            return 1;
        } else {
            return 0;
        }
        $conexion = null;
    }

    public function actualizarRegion($idusuario, $nuevaRegion, $update, $conexion)
    {
        $sql = $conexion->prepare("UPDATE usuario SET Region_idRegion = :nuevaRegion, update_usuario = :update_usuario WHERE idusuario = :idusuario");
        $sql->bindParam(':nuevaRegion', $nuevaRegion);
        $sql->bindParam(':update_usuario', $update);
        $sql->bindParam(':idusuario', $idusuario);
        if ($sql->execute()) {
            return 1;
        } else {
            return 0;
        }
        $conexion = null;
    }

    public function eliminarUsuario($idusuario, $conexion)
    {
        $sql = $conexion->prepare("DELETE FROM usuario WHERE idusuario = :idusuario");
        $sql->bindParam(':idusuario', $idusuario);
        if ($sql->execute()) {
            return 1;
        } else {
            return 0;
        }
        $conexion = null;
    }
}
