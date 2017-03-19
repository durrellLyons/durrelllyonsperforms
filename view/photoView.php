<?php

class photoView {
    
    public function showAllPhotCategories($photoCatArray) {
        $this->better_print_r($photoCatArray);
        foreach($photoCatArray as $cat) {
            $content = '';
            $content .= '<div class="photo_category">';
            $content .= '<img src="admin/' . $cat['image'] . '" title="' . $cat['cat_name'] . '" />';
            $content .= '</div>';
            echo $content;
        }
    }
    
    private function better_print_r($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
}

?>