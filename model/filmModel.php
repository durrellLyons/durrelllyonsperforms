<?php

class filmModel{
    private $mysqli;
    
    public function __construct($dbConnector) {
        //$dbConnector = new dbConnector();
        $this->mysqli = $dbConnector->connect();
        
    }
    
    /*****   getAllFilms   *****/
    public function getAllFilms() {
        $arrayFilmCatData = array();
        $arrayFilmCat = array();
        
        $result = mysqli_query($this->mysqli, "SELECT * FROM filmography WHERE active = 1 ORDER BY f_id DESC");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $f_id = $row['f_id'];
            $f_title = $row['f_title'];
            $f_description = $row['f_description'];
            $f_poster = $row['f_poster'];
            $f_imdbLink = $row['f_imdbLink'];
            
            $arrayFilmCatData['f_id'] = $f_id;
            $arrayFilmCatData['f_title'] = $f_title;
            $arrayFilmCatData['f_description'] = $f_description;
            $arrayFilmCatData['f_poster'] = $f_poster;
            $arrayFilmCatData['f_imdbLink'] = $f_imdbLink;
            
            array_push($arrayFilmCat, $arrayFilmCatData);
        }
        return $arrayFilmCat;
    }
    
    public function __destruct() {
        unset($this->mysqli);
    }
}