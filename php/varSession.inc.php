<?php
    session_start();
    $json = file_get_contents("json/cat.json");
    $parsed_json = json_decode($json);

    $_SESSION['salon'] = array();
    for ($i = 0; $i < 6; $i++) { 
        array_push($_SESSION['salon'], [
            $parsed_json->salon[$i]->id,
            $parsed_json->salon[$i]->img,
            $parsed_json->salon[$i]->nom,
            $parsed_json->salon[$i]->prix
        ]);
    }

    $_SESSION['cuisine'] = array();
    for ($i = 0; $i < 6; $i++) {
        array_push($_SESSION['cuisine'], [
            $parsed_json->cuisine[$i]->id,
            $parsed_json->cuisine[$i]->img,
            $parsed_json->cuisine[$i]->nom,
            $parsed_json->cuisine[$i]->prix
        ]);
    }

    $_SESSION['sdb'] = array();
    for ($i = 0; $i < 6; $i++) {
        array_push($_SESSION['sdb'], [
            $parsed_json->sdb[$i]->id,
            $parsed_json->sdb[$i]->img,
            $parsed_json->sdb[$i]->nom,
            $parsed_json->sdb[$i]->prix
        ]);
    }
?>
