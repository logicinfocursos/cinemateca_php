<?php
include "components/htmlHead.php"
?>

<body>

    <div class="container-fluid">

        <?php
        include "components/nav.php"
        ?>

        <section class="container">
           
            <?php
            include "components/home/header.php";
            include "components/home/toggleDisplayButton.php";
            ?>

            <h1>Top filmes mais populares no <a class="text-decoration-none text-reset"
                    href="<?=$tmdbUriMoviePage?>" target="_blank">TMDB</a></h1>
            
            <?php
            include "components/home/pagination.php";
            include "components/home/gridMoveis.php";
            include "components/home/listMovies.php";
            ?>

        </section>
    </div>
</body>

</html>