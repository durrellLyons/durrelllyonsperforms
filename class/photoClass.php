<?php

include("admin/class/photo_adminClass.php");

class photo_view extends photo{
    
    public function getAllPhotoCat(){
        $activePhotoCat = array();
        foreach($this->getAllPhotCategories() as $photocat){
            if($photocat['active']){
                array_push($activePhotoCat, $photocat);
            }
        }
        return $photocat;
    }
    
    
    public function getAllPhotosByCatId($cat_id){
        $activeValidPhoto = array();
        //$this->better_print_r($this->getAllPhotos());
        foreach($this->getAllPhotos() as $photo){
            if($photo['active'] == true && $photo['photo_cat'] == $cat_id){
                //$this->better_print_r($photo);
                array_push($activeValidPhoto, $photo);
            }
        }
        //$this->better_print_r($activeValidPhoto);
        return $activeValidPhoto;
    }
    
    public function getAllFeaturePhotos(){
        $activeValidPhoto = array();
        foreach($this->getAllPhotos() as $photo){
            if($photo['active'] == true && $photo['feature'] == true){
                //$this->better_print_r($photo);
                array_push($activeValidPhoto, $photo);
            }
        }
        //$this->better_print_r($activeValidPhoto);
        return $activeValidPhoto;
    }
    
}

?>