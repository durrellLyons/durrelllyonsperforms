<?php

class filmView {
    
    public function showAllFilms($filmListArray) {
        $filmArray = array();
        foreach($filmListArray as $film) {
            $content = '';
            $content .= '<div class="film_div">';
            $content .= '<span class="helper"></span>';
            $content .= '<img src="admin/' . $film['f_poster'] . '" title="' . $film['f_title'] . '" />';
            $content .= '<div class="film_info_div">';
            $content .= '<h4>' . $film['f_title'] . '</h4>';
            $content .= '<p>' . $film['f_description'] . '<br> <a target="_blank" href="' . $film['f_imdbLink'] . '">More Info</a> </p>';
            $content .= '</div>';
            $content .= '</div>';
            array_push($filmArray, $content);
        }
        return $filmArray;
    }
    
    private function better_print_r($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
}

?>