<?php include('controller/photoController.php'); ?>
<?php $photoController = new photoController($dbConnector); ?>

<section class="main-containers">
<?php $photoController->showAllPhotoCategories(); ?>
</section>