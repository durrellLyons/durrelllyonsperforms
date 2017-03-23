<?php
    require('../controller/photoController.php');
    $photoController = new photoController();
    echo $photoController->showAllPhotoCategories();
?>