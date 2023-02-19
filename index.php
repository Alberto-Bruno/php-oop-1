<?php

include_once __DIR__ . '../models/movie.php';
include_once __DIR__ . '../data/data.php';

$moviesList = [];

foreach ($movies as $movie) {
    $moviesList[] = new Movie($movie['title'], $movie['director'], $movie['year'], $movie['genre'], $movie['music']);
}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
</head>

<body>
    <header class="bg-secondary text-white p-3">
        <h1 class="container">Streaming List</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-cols-3 my-4 g-4">
                <?php foreach ($moviesList as $movie) : ?>
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h3 class="text-center"><?= $movie->title ?></h3>
                            </li>
                            <li class="list-group-item">
                                <h5>Diretto da: <strong><?= $movie->director ?></strong></h5>
                            </li>
                            <li class="list-group-item">
                                <h4>Uscita: <?= $movie->year ?></h4>
                            </li>
                            <li class="list-group-item">
                                <p>Genere Film: <strong><?= $movie->genre ?></strong></p>
                            </li>
                            <li class="list-group-item">
                                <h5>Colonna sonora di: <strong><?= $movie->music ?></strong></h5>
                            </li>
                        </ul>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>