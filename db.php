<?php
require_once __DIR__ . './Models/Production.php';

$dune = new Production("Dune", "eng", 8.5);
$star_wars = new Production("Star Wars", "eng", 6.4);
$star_trek = new Production("Star Trek", "eng", 5.4);
$spider_man = new Production("Spider Man", "eng", 7.7);
$batman = new Production("Batman", "eng", 9.1);

$films = [
    $dune,
    $star_wars,
    $star_trek,
    $spider_man,
    $batman
];