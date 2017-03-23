<?php

class videoView {
    
    public function showVideoCatByCatId($arrayVideoCat) {
        $content = '';
        $content .= '<div class="video_cat_div" id="'.$arrayVideoCat['videoCatId'].'" onclick="getMediaList(this.id, \'video\')">';
        $content .= '<img src="admin/'.$arrayVideoCat['videoCatImage'].'" 
                          class="videoCatDiv" 
                          alt="'.$arrayVideoCat['videoCatName'].'" 
                          title="'.$arrayVideoCat['videoCatName'].'" />';
        $content .= '<div class="video_cat_title">'.$arrayVideoCat['videoCatName'].'</div>';
        $content .= '</div>';
        return $content;
    }
    
    public function showVideoListAndCat($arrayVideoListAndCat) {
        $content = '';
        $content .= '<div class="video_list_div">';
        $content .= '<h4>' . $arrayVideoListAndCat['videoCat'] . '</h4>';
            foreach($arrayVideoListAndCat['videoList'] as $video) {
            $content .= '<iframe src="https://www.youtube.com/embed/'.$video['video_path'].'?modestbranding=1&theme=light"
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