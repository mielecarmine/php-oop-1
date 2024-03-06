<?php
require_once __DIR__ . './Models/Production.php';

$dune = new Movie("Dune", "eng", 8.5, '2000000 $', '3 hours');
$star_wars = new Movie("Star Wars", "eng", 6.4, '2000000 $', '3 hours');
$star_trek = new Movie("Star Trek", "eng", 5.4, '2000000 $', '3 hours');
$spider_man = new Movie("Spider Man", "eng", 7.7, '2000000 $', '3 hours');
$batman = new Movie("Batman", "eng", 9.1, '2000000 $', '3 hours');


$films = [
    $dune,
    $star_wars,
    $star_trek,
    $spider_man,
    $batman
];