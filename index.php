<?php

class Production {
    public string $title;
    public string $lang;
    public float $vote;

    function __construct($title, $lang, $vote)
    {
        $this->title = $title;
        $this->lang = $lang;
        $this->vote = $vote;
    }
}

$dune = new Production("Dune", "eng", 8.5);
$star_wars = new Production("Star Wars", "eng", 6.4);
var_dump($film_1, $film_2);