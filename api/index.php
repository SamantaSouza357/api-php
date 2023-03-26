<?php


function api(){

    $url = "https://www.canalti.com.br/api/pokemons.json";
    $pokemons = json_decode(file_get_contents($url));

    foreach($pokemons->pokemon as $data){
            
        echo "<br>id: $data->id";
        echo "<br>nome: $data->name";
        echo "<br><img src=$data->img >";

    }
}

    $resultado = api();
    return $resultado;
?>