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
    
    public function getAllPhotosByCatId($cat_id){
        $arrayPhotoData = array();
        $arrayPhoto = array();
        
        $result = mysqli_query($this->mysqli, "SELECT * FROM photogallery WHERE photo_cat =$cat_id
                                               and active = 1
                                               ORDER BY photo_id DESC");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $photo_id = $row['photo_id'];
            $photo_cat = $row['photo_cat'];
            $photo_name = $row['photo_name'];
            $active = $row['active'];
            $image = $row['image'];
            
            $arrayPhotoData['photo_id'] = $photo_id;
            $arrayPhotoData['photo_cat'] = $photo_cat;
            $arrayPhotoData['photo_name'] = $photo_name;
            $arrayPhotoData['active'] = $active;
            $arrayPhotoData['image'] = $image;
            
            array_push($arrayPhoto, $arrayPhotoData);
        }
        return $arrayPhoto;
    }  
}

?>