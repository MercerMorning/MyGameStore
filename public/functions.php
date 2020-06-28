<?php
function urlName($name) {
    $name = mb_strtolower($name);
    $name = str_replace(' ', '-', $name);
    return $name;
}

function clearPrice($price) {
    $price = preg_replace('~\D+~','', $price);
    return $price;
}

function getFullAddress($site, $game) {
    return 'https://'. $site . $game;
}

const SITES = ['zaka-zaka.com/game/', 'gabestore.ru/game/', 'steam-account.ru/oplata/'];
