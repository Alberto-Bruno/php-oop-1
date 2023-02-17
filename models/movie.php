<?php
class Movie
{
    public $id;
    public $title;
    public $director;
    public $year;
    public $actors;
    public $genres;
    public $vote;

    // Constructor
    public function __construct($_id, $_title, $_director, $_year, $_actors, $_genres, $_vote)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->actors = $_actors;
        $this->genres = $_genres;
        $this->vote = $_vote;
    }

    // Methods 
    public function getMovieTitle()
    {
        return $this->title;
    }
    public function getMovieDirector()
    {
        return $this->director;
    }
    public function getMovieYear()
    {
        return $this->year;
    }
    public function getMovieActors()
    {
        $actors_names = '';
        foreach ($this->actors as $actor) {
            $actors_names .= $actor->name . ', ';
        }
        return trim($actors_names);
    }
    public function getMovieGenres()
    {
        $genreNames = '';
        foreach ($this->genres as $genre) {
            $genreNames .= $genre->name . ', ';
        }
        return $genreNames;
    }
    public function getMovieVote()
    {
        return $this->vote;
    }
}
