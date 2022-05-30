<?php
class Region
{
    private $plataforma;
    private $host;

    public function __construct($plataforma, $host)
    {
        $this->plataforma = $plataforma;
        $this->host = $host;
    }

    public function getPlataforma()
    {
        return $this->plataforma;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setPlataforma($plataforma)
    {
        return $this->plataforma = $plataforma;
    }

    public function setHost($host)
    {
        return $this->host = $host;
    }
}
