<?php

    $cat_id = $_GET['cat_id'];
    require('../controller/videoController.php');
    $videoController = new videoController();
    echo $videoController->showVideoListAndCatByCatId($cat_id);

?>

<p>
    <a href='#videoDiv' onclick='dataDisplay("video/videoHome.php", "#videoDiv");'>Video Home</a>
</p>