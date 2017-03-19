<?php

include('model/photoModel.php');
include('view/photoView.php');

class photoController {
    
    private $photoModel;
    private $photoView;
    
    public function __construct($dbConnector) {
        $this->photoModel = new photoModel($dbConnector);
        $this->photoView = new photoView();
    }
    
    public function showAllPhotoCategories() {
        $photoCatArray = $this->photoModel->getAllPhotCategories();
        $photoCatList = $this->photoView->showAllPhotCategories($photoCatArray);
    }
    
}

?>