<?php

    require('controller/videoController.php');
    $videoController = new videoController();
    echo $videoController->showVideoListAndCatByCatId(1);
?>