<div class="row" id="list" style="display: none">
    <div class="container">

    <?php
        for($m = 0; $m < 20; $m++)
        {
            ?>
                <div class="card mb-3 px-3 py-3 col-12" style="border-radius: 10px">
            <div class="card-header row">
                <picture class="col-12 col-sm-12 col-md-12 col-lg-3">

                    <img src="<?=$imagePath . $movies->results[$m]->poster_path?>" class="img-fluid img-thumbnail" alt="capa do filme" style="max-height:500px">

                </picture>

                <div class="col-12 col-sm-12 col-md-12 col-lg-9">
                    <h1 class="mt-5"><?=$movies->results[$m]->title?></h1>
                    <p><b><?=$movies->results[$m]->original_title?></b></p>
                    <p><?=$movies->results[$m]->overview?></p>

                    <a class="btn btn-primary" href="movie.php?id=<?=$movies->results[$m]->id ?>">ver os detalhes</a>
                </div>

            </div>
        </div>
        <?php 
        }
            ?>

        

    </div>
</div>