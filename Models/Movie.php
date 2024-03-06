<?php
require_once __DIR__ . './Production.php';


class Movie extends Production {
    public string $profits;
    public string $length;

    function __construct($title, $lang, $vote, $profits, $length)
    {
        parent::__construct($title, $lang, $vote);
        $this->profits = $profits;
        $this->length = $length; 
    }
}