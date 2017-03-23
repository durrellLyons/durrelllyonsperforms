<?php
    
    require('../class/dbConnect.php');
    require('../model/videoModel.php');
    require('../view/videoView.php');
    
    class videoController {
        
        private $videoModel;
        private $videoView;
        
        public function __construct() {
            $dbConnector = new dbConnector();
            $this->videoModel = new videoModel($dbConnector);
            $this->videoView = new videoView();
        }
        
        public function showVideoCatByCatIdController($videoCatId) {
            $videoCatData = $this->videoModel->getVideoCatByCatId($videoCatId);
            $videoCat = $this->videoView->showVideoCatByCatId($videoCatData);
            return $videoCat;
        }
        
        public function showVideoListAndCatByCatId($videoCatId) {
            $videoDataArray = array();
            
            $videoCat = $this->videoModel->getVideoCatById($videoCatId);
            $videoDataArray['videoCat'] = $videoCat;
            
            $videoList = $this->videoModel->getVideoListByCatId($videoCatId);
            $videoDataArray['videoList'] = $videoList;
            
            $videoDisplay = $this->videoView->showVideoListAndCat($videoDataArray);
            return $videoDisplay;
        }
    }
    
?>