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

const SITES = [
    'zaka-zaka.com/game/' => '.price',
    'gabestore.ru/game/' => '.b-card__price-currentprice',
    'steampay.com/game/' => '.product__current-price'
];
