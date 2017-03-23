<?php
    require('../controller/filmController.php');
    $film = new filmController();
    echo $film->showAllFilms();
?>