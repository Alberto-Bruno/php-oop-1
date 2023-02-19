<?php

class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $music;

    public function __construct($title, $director, $year, $genre, $music)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
        $this->music = $music;
    }

    public function getInfo()
    {
        return "$this->title, Diretto da $this->director Anno $this->year, Genere film $this->genre, colonna sonora di $this->music";
    }
}
