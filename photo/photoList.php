<?php

    $cat_id = $_GET['cat_id'];
    require('../controller/photoController.php');
    $photoController = new photoController();
    echo $photoController->showAllPhotoByCat($cat_id);

?>

<p>
    <a href='#photoDiv' onclick='dataDisplay("photo/photoHome.php", "#photoDiv");'>Photo Home</a>
</p>