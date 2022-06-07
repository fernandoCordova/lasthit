<?php
class Usuario
{
    private $correo;
    private $clave;
    private $nombreInvocador;
    private $create_usuario;
    private $update_usuario;
    private $delete_usuario;
    private $tipoUsuario;
    private $estado;
    private $region;

    public function __construct($correo, $clave, $nombreInvocador, $create_usuario = null, $update_usuario = null, $delete_usuario = null, $tipoUsuario, $estado, $region)
    {
        $this->correo = $correo;
        $this->clave = $clave;
        $this->nombreInvocador = $nombreInvocador;
        $this->create_usuario = $create_usuario;
        $this->update_usuario = $update_usuario;
        $this->delete_usuario = $delete_usuario;
        $this->tipoUsuario = $tipoUsuario;
        $this->estado = $estado;
        $this->region = $region;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getClave()
    {
        return $this->clave;
    }

    public function getNombreInvocador()
    {
        return $this->nombreInvocador;
    }

    public function getCreate()
    {
        return $this->create_usuario;
    }

    public function getUpdate()
    {
        return $this->update_usuario;
    }

    public function getDelete()
    {
        return $this->delete_usuario;
    }

    public function getTipoUsuario()
    {
        return $this->tipoUsuario;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function setCorreo($correo)
    {
        return $this->correo = $correo;
    }
    public function setClave($clave)
    {
        return $this->clave = $clave;
    }
    public function setNombreInvocador($nombreInvocador)
    {
        return $this->nombreInvocador = $nombreInvocador;
    }

    public function setCreate($create_usuario)
    {
        return $this->create_usuario = $create_usuario;
    }

    public function setUpdate($update_usuario)
    {
        return $this->update_usuario = $update_usuario;
    }

    public function setDelete($delete_usuario)
    {
        return $this->delete_usuario = $delete_usuario;
    }

    public function setTipoUsuario($tipoUsuario)
    {
        return $this->tipoUsuario = $tipoUsuario;
    }
    public function setEstado($estado)
    {
        return $this->estado = $estado;
    }
    public function setRegion($region)
    {
        return $this->region = $region;
    }
}
