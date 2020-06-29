<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\DomCrawler\Crawler;

class Parsing extends Model
{

    public static function price($site, $game, $divClass)
    {
        @$html = file_get_contents(getFullAddress($site, $game));
        $crawler = new Crawler($html);
        $parsed = $crawler->filter($divClass);
        return $parsed->text();
    }

//    public static function index()
//    {
//        @$html = file_get_contents('https://zaka-zaka.com');
//        $crawler = new Crawler($html);
//        $parsed = $crawler->filter('.game-block')->links();
//        foreach ($parsed as $value) {
//            echo $value->getUri();
//        }
//    }
}
