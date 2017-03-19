<?php

include('model/filmModel.php');
include('view/filmView.php');

class filmController {
    
    private $mysqli;
    private $filmModel;
    private $filmView;
    
    public function __construct($dbConnector) {
        $this->filmModel = new filmModel($dbConnector);
        $this->filmView = new filmView();
    }
    
    public function showAllFilms() {
        $filmArray = $this->filmModel->getAllFilms();
        $filmList = $this->filmView->showAllFilms($filmArray);
    }
    
}

?>