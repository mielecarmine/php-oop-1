<?php
require_once __DIR__ . "./Models/Production.php";
require_once __DIR__ . "./Models/Movie.php";
require_once __DIR__ . "./Models/TVSerie.php";
require_once __DIR__ . './db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>MOVIES</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Profits</th>
                    <th scope="col">Length</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($films as $film): ?>
                <tr>
                    <td><?= $film->title?></td>
                    <td><?= $film->lang?></td>
                    <td><?= $film->vote?></td>
                    <td><?= $film->profits?></td>
                    <td><?= $film->length?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <h1>TV Series</h1>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Seasons</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tv_series as $tv_serie): ?>
                <tr>
                    <td><?= $tv_serie->title?></td>
                    <td><?= $tv_serie->lang?></td>
                    <td><?= $tv_serie->vote?></td>
                    <td><?= $tv_serie->seasons?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>