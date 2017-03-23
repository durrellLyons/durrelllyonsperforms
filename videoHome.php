<?php

    require('controller/videoController.php');
    $videoController = new videoController();
    echo $videoController->showVideoCatByCatIdController(2);
    echo $videoController->showVideoCatByCatIdController(4);
?>