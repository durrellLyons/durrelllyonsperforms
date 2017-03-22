<?php

    require('controller/videoController.php');
    $videoController = new videoController();
    echo $videoController->showVideoListAndCatByCatId(2);
    echo $videoController->showVideoListAndCatByCatId(4);
?>