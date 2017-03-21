<?php

require('class/dbConnect.php');
require('model/filmModel.php');
require('view/filmView.php');

class filmController {
    
    private $filmModel;
    private $filmView;
    
    public function __construct() {
        $dbConnector = new dbConnector();
        $this->filmModel = new filmModel($dbConnector);
        $this->filmView = new filmView();
    }
    
    public function showAllFilms() {
        $filmArray = $this->filmModel->getAllFilms();
        $filmList = $this->filmView->showAllFilms($filmArray);
        return implode(' ', $filmList);
    }
    
}

?>