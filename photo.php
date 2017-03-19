<?php include('controller/photoController.php'); ?>
<?php $photoController = new photoController($dbConnector); ?>

<section class="main-containers">
    <article class="layout-containers">
        <?php $photoController->showAllPhotoCategories(); ?>
    </article>
</section>