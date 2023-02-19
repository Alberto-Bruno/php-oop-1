
<?php

include_once __DIR__ . '/../models/movie.php';

// $movie1 = new Movie('Il Signore degli Anelli', 'Peter Jackson', '2003', 'Fantasy, Adventure', 'Howard Shore');
// $movie2 = new Movie('Lo Hobbit', 'Peter Jackson', '2013', 'Fantasy, Adventure', 'Howard Shore');
// $movie3 = new Movie('Jurassic Park', 'Steven Spielberg', '1993', 'Adventure', 'John Williams');
// $movie4 = new Movie('Jurassic Park', 'Steven Spielberg', '1993', 'Adventure', 'John Williams');



$movies = [
    [
        'title' => 'Il signore degli Anelli',
        'director' => 'Peter Jackson',
        'year' => '2003',
        'genre' => 'Fantasy, Adventure',
        'music' => 'Howard Shore'
    ],
    [
        'title' => 'Lo Hobbit',
        'director' => 'Peter Jackson',
        'year' => '2013',
        'genre' => 'Fantasy, Adventure',
        'music' => 'Howard Shore'
    ],
    [
        'title' => 'Jurassic Park',
        'director' => 'Peter Jackson',
        'year' => '1993',
        'genre' => 'Adventure',
        'music' => 'Jhon Williams'
    ],
    [
        'title' => 'Tron Legacy',
        'director' => 'Peter Jackson',
        'year' => '2010',
        'genre' => 'Fantasy, Action',
        'music' => 'Daft Punk'
    ],
    [
        'title' => 'L ultimo dei Mohicani',
        'director' => 'Michael Mann',
        'year' => '1992',
        'genre' => 'Action, Historical, Drama',
        'music' => 'Trevor Jones, Randy Edelman'
    ],
    [
        'title' => 'Sherlock Holmes',
        'director' => 'Guy Ritchie',
        'year' => '2009',
        'genre' => 'Mystery, Adventure, Comedy, Thriller',
        'music' => 'Hans Zimmer'
    ],
];
?>