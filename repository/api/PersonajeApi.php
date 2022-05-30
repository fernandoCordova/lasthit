<?php
class PersonajeApi
{
    public function obtenerPersonajes()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://ddragon.leagueoflegends.com/cdn/12.10.1/data/es_AR/champion.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function obtenerDetallesPersonaje($idPersonaje)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://ddragon.leagueoflegends.com/cdn/12.10.1/data/es_AR/champion/' . $idPersonaje . '.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
