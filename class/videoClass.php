<?php

include("admin/class/video_adminClass.php");

class video_view extends video{
    
    public function getAllVideoCat(){
        $activeVideoCat = array();
        foreach($this->getAllVideoCategoris() as $video_cat){
            if($video_cat['active']){
                array_push($activeVideoCat, $video_cat);
            }
        }
        return $activeVideoCat;
    }
    
    public function getAllVideosById($id){
        $activeValidVideo = array();
        foreach($this->getAllVideos() as $video){
            if($video['active'] == true && $video['video_cat'] == $id){
                array_push($activeValidVideo, $video);
            }
        }
        return $activeValidVideo;
    }
}

?>