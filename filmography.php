<?php include('controller/filmController.php'); ?>

<section class='main-containers film' id='film' >
    <article role='article' class='layout-container'>
        <h3>Filmography</h3>
        <?php
            $film = new filmController($dbConnector);
            $film->showAllFilms();
        ?>
    </article>
</section>