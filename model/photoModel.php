<?php

class photoModel{
    private $mysqli;
    
    public function __construct($dbConnector) {
        $this->mysqli = $dbConnector->connect();
    }
    
    /*****   photocat   *****/
    public function getAllPhotCategories() {
        $arrayPhotoCatData = array();
        $arrayPhotoCat = array();
        
        $result = mysqli_query($this->mysqli, "SELECT * FROM photocat WHERE active = 1 ORDER BY cat_id ASC");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $cat_id = $row['cat_id'];
            $cat_name = $row['cat_name'];
            $active = $row['active'];
            $image = $row['image'];
            
            $arrayPhotoCatData['cat_id'] = $cat_id;
            $arrayPhotoCatData['cat_name'] = $cat_name;
            $arrayPhotoCatData['active'] = $active;
            $arrayPhotoCatData['image'] = $image;
            
            array_push($arrayPhotoCat, $arrayPhotoCatData);
        }
        return $arrayPhotoCat;
    }
    
/*    
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
*/    
}

?>