<?php

require('../class/dbConnect.php');
require('../model/photoModel.php');
require('../view/photoView.php');

class photoController {
    
    private $photoModel;
    private $photoView;
    
    public function __construct() {
        $dbConnector =  new dbConnector();
        $this->photoModel = new photoModel($dbConnector);
        $this->photoView = new photoView();
    }
    
    public function showAllPhotoCategories() {
        $photoCatArray = $this->photoModel->getAllPhotCategories();
        $photoCatList = $this->photoView->showAllPhotCategories($photoCatArray);
        return implode(' ', $photoCatList);
    }
    
    public function showAllPhotoByCat($cat_id) {
        $photoListByCatId = $this->photoModel->getAllPhotosByCatId($cat_id);
        $photoList = $this->photoView->showAllPhotosByCat($photoListByCatId);
        return implode(' ', $photoList);
    }  
}

?>