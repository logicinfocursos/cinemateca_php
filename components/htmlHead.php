<?php
$tmdbUri = 'https://api.themoviedb.org/3/movie/popular'; // uri base para acesso a lista
$tmdbUriMovie = 'https://api.themoviedb.org/3/movie/'; // uri base para acesso a um filme por id
$api_key = 'de06b36687693115c9ea4cbf858e4c1a';
           // 2ba4ebcdf4dabd52e552b05ef45bf381
$imagePath = 'https://image.tmdb.org/t/p/original';  // imagem do filme
$tmdbUriMoviePage = 'https://www.themoviedb.org/movie/'; // pagina do filme no site tmdb  ex: https://www.themoviedb.org/movie/718930
$tmdbPage="https://www.themoviedb.org/"; // pagina do tmdb


$language = 'pt-br';
$textLimit = 100;

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$num_pages = 25;

$url =  $tmdbUri . "?api_key=" . $api_key . "&language=" . $language . "&page=" . $page;
$movies = json_decode(file_get_contents($url));

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movies</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"
        defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"
        defer></script>

    <script src="./assets/scripts/index.script.js" defer></script>
</head>