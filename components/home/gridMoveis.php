<div class="row" id="grid">
    <div class="container">

        <div class="row text-center text-lg-start" id="gridList">

        <?php
        for($m = 0; $m < 20; $m++)
        {
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-2 gx-3 mb-3">
            <a href="movie.php?id=<?php echo $movies->results[$m]->id ?>" class="d-block mb-4 h-100 text-decoration-none text-reset">
                <div class="card h-100">

                    <img src="<?php echo $imagePath . $movies->results[$m]->poster_path?>" class="card-img-top" alt="capa do filme">

                    <div className="card-body">
                        <h5 class="card-title px-4 my-4"><?php echo $movies->results[$m]->title?></h5>
                        <p class="card-text px-4"><b><?php echo $movies->results[$m]->original_title?></b></p>
                        <p class="card-text px-4"><?php echo $movies->results[$m]->release_date?></p>
                    </div>
                </div>
            </a>
        </div>
        <?php 
        }
            ?> 

        </div>
    </div>
</div>