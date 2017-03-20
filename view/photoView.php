<?php

class photoView {
    
    public function showAllPhotCategories($photoCatArray) {
        $photoCatList = array();
        foreach($photoCatArray as $cat) {
            $content = '';
            $content .= '<div class="photo_category" id="' . $cat['cat_id'] . '" onclick="getMediaList(this.id, \'photo\')">';
            $content .= '<span class="helper"></span>';
            $content .= '<img src="admin/' . $cat['image'] . '" title="' . $cat['cat_name'] . '" />';
            $content .= '<div class="photo_category_title">' . $cat['cat_name'] . '</div>';
            $content .= '</div>';
            array_push($photoCatList, $content);
        }
        return $photoCatList;
    }
    
    public function showAllPhotosByCat($photoListArray) {
        $photoArray = array();
        foreach($photoListArray as $photo) {
            $content = '';
            $content .= '<div class="photos">';
            $content .= '<span class="helper"></span>';
            $content .= '<img src="admin/' . $photo['image'] . '" title="' . $photo['photo_name'] . '" />';
            $content .= '</div>';
            array_push($photoArray, $content);
        }
        return $photoArray;
    }
    
    private function better_print_r($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
}

?>