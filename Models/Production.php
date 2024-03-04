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

    function getVote() {
        return $this->vote;
    }

    function setVote($user_vote) {
        $this->vote = $user_vote;
    }

    function getTitle() {
        return $this->title;
    }

    function setTitle($user_title) {
        $this->vote = $user_title;
    }

    function getLang() {
        return $this->lang;
    }

    function setLang($user_lang) {
        $this->vote = $user_lang;
    }
}