<?php

class videoView {
    
    public function showVideoListAndCat($arrayVideoListAndCat) {
        $content = '';
        $content .= '<div class="video_list_div">';
        $content .= '<h4>' . $arrayVideoListAndCat['videoCat'] . '</h4>';
            foreach($arrayVideoListAndCat['videoList'] as $video) {
            $content .= '<iframe src="https://www.youtube.com/embed/' . $video['video_path'] . '?modestbranding=1&theme=light"
                                 allowfullscreen></iframe>';
            }
        $content .= '</div>';
        return $content;
    }
    
    private function better_print_r($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
}

?>