<?php
class ObjetoApi
{
    public function obtenerObjeto()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://ddragon.leagueoflegends.com/cdn/12.10.1/data/es_AR/item.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    function obtenerDetallesObjeto($idObjeto)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://ddragon.leagueoflegends.com/cdn/12.10.1/data/es_AR/item.json');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        $objetos = json_decode($data)->{'data'};
        $objetoEspecifico = [];
        foreach ($objetos as $objeto) {
            if ($objeto->{'name'} === $idObjeto) {
                $objetoEspecifico = [
                    $objeto
                ];
            }
        }
        return json_encode($objetoEspecifico);
    }
}
