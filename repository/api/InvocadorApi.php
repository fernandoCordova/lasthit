<?php
class InvocadorApi
{
    public function obtenerInvocador($region, $nombreInvocador, $apiKey)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://' . $region . '.api.riotgames.com/lol/summoner/v4/summoners/by-name/' . $nombreInvocador . '?api_key=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function obtenerRanking($region, $apiKey)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://' . $region . '.api.riotgames.com/lol/league/v4/challengerleagues/by-queue/RANKED_SOLO_5x5?api_key=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    function obtenerPersonajesPorInvocador($region, $idInvocador, $apiKey, $personajes)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://' . $region . '.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/' . $idInvocador . '?api_key=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $maestriaPersonajesPorInvocador = curl_exec($ch);
        curl_close($ch);
        $maestriaPersonajesPorInvocador = json_decode($maestriaPersonajesPorInvocador);
        $personajes = json_decode($personajes)->{'data'};
        $maestriaOrdenadas = [];
        foreach ($maestriaPersonajesPorInvocador as $maestria) {
            foreach ($personajes as $personaje) {
                if ($maestria->{'championId'} == $personaje->{'key'}) {
                    array_push($maestriaOrdenadas, [
                        'idPersonaje' => $personaje->{'id'},
                        'imagen' => $personaje->{'image'}->{'full'},
                        'nivelDeMaestria' => $maestria->{'championLevel'},
                        'puntosDeMaestria' => $maestria->{'championPoints'}
                    ]);
                }
            }
        }
        return json_encode($maestriaOrdenadas);
    }

    public function obtenerLigas($region, $idInvocador, $apiKey)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://' . $region . '.api.riotgames.com/lol/league/v4/entries/by-summoner/' . $idInvocador . '?api_key=' . $apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        $ligas = json_decode($data);
        $ligasOrdenadas = [];
        if (empty($ligas)) {
            echo 'Ligas viene vacio';
            $ligasOrdenadas = [
                ['tier' => 'Unranked'],
                ['tier' => 'Unranked']
            ];
        } else {
            if (array_key_exists(1, $ligas)) {
                if ($ligas[0]->{'queueType'} == 'RANKED_SOLO_5x5') {
                    $ligasOrdenadas = [
                        $ligas[0],
                        $ligas[1]
                    ];
                } else {
                    $ligasOrdenadas = [
                        $ligas[1],
                        $ligas[0]
                    ];
                }
            } else {
                if ($ligas[0]->{'queueType'} == 'RANKED_SOLO_5x5') {
                    $ligasOrdenadas = [
                        $ligas[0],
                        ['tier' => 'Unranked']
                    ];
                } else {
                    $ligasOrdenadas = [
                        ['tier' => 'Unranked'],
                        $ligas[0]
                    ];
                }
            }
        }
        return json_encode($ligasOrdenadas);
    }
}
