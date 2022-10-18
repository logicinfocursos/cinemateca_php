<?php
include "components/htmlHead.php";

$id = intval($_GET['id']);

$url2 =  $tmdbUriMovie . "/" . $id . "?api_key=" . $api_key . "&language=" . $language ;
$movie = json_decode(file_get_contents($url2));

?>

<body>

    <div class="container-fluid">

        <?php
        include "components/nav.php"
        ?>

        <section class="container">

            <div class="row gx-4 gx-lg-5 align-items-center">

                <div class="col-md-6">

                    <div id="movie_poster">
                        <img class="card-img-top mb-5 mb-md-0" src="<?= $imagePath . $movie->poster_path?>"
                            alt="capa do filme" />
                    </div>

                    <a href="index.php" class="btn btn-primary mt-5 mb-5">retornar</a>

                </div>

                <div class="col-md-6" id="movieDetails">
                    <div class="small mb-1">
                        fonte: <a href="<?=$tmdbUriMoviePage.$movie->id?>" target="_blank">TMDB</a>
                    </div>

                    <h1 class=""><?=$movie->title?></h1>
                    <h6 class="mb-5"><?=$movie->original_title?></h6>

                    <p class="lead"><?=$movie->overview?></p>

                    <a href="<?=$tmdbUriMoviePage.$movie->id?>" class="btn btn-outline-dark" target="_blank">ver no TMDB </a>

                </div>
            </div>
        </section>

    </div>
</body>

</html>