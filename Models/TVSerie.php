<?php
require_once __DIR__ . './Production.php';


class TVSerie extends Production {
    public int $seasons;

    function __construct($title, $lang, $vote, $seasons)
    {
        parent::__construct($title, $lang, $vote);
        $this->seasons = $seasons;
    }
}