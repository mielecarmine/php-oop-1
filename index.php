<?php
require_once __DIR__ . "./Models/Production.php";
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
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Language</th>
                    <th scope="col">Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($films as $film): ?>
                <tr>
                    <td><?= $film->title?></td>
                    <td><?= $film->lang?></td>
                    <td><?= $film->vote?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>