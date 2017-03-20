<?php
    require('controller/filmController.php');
    $film = new filmController();
    $film->showAllFilms();
?>