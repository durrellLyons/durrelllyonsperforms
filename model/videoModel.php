<?php

class videoModel {
    
    private $mysqli;
    public function __construct($dbConnector) {
        $this->mysqli = $dbConnector->connect();
    }
    
    public function getVideoCatById($video_cat_id) {
        $result = mysqli_query($this->mysqli, 'SELECT video_cat_name FROM videocat WHERE videocat.video_cat_id = ' . $video_cat_id . '
                                               AND videocat.active = 1') or die(mysqli_error());
        $row =  mysqli_fetch_array($result, MYSQLI_ASSOC);
        $video_cat_name = $row['video_cat_name'];
        return $video_cat_name;
    }
    
    public function getVideoListByCatId($video_cat_id) {
        $arrayVideoData = array();
        $arrayVideos = array();
        
        $result = mysqli_query($this->mysqli, 'Select video_name, video_path FROM videogallery
                                               WHERE video_cat = ' . $video_cat_id .
                                               ' AND active = 1')or die(mysqli_error());
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $video_name = $row['video_name'];
            $video_path = $row['video_path'];
            
            $arrayVideoData['video_name'] = $video_name;
            $arrayVideoData['video_path'] = $video_path;
            array_push($arrayVideos, $arrayVideoData);
        }
        
        return $arrayVideos;
    }
    
}

?>